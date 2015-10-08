<?php


namespace frontend\controllers\user;

use dektrium\user\Finder;
use frontend\models\Student;
use frontend\models\User;
use frontend\models\user\LoginForm;
use dektrium\user\Module;

use frontend\components\ThemeHelper;
use Yii;
use yii\authclient\AuthAction;
use yii\authclient\ClientInterface;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Url;

use yii\web\Response;
use dektrium\user\traits\AjaxValidationTrait;
use dektrium\user\controllers\SecurityController as BaseSecurityController;

/**
 * Controller that manages user authentication process.
 *
 * @property Module $module
 *
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class SecurityController extends BaseSecurityController
{
    use AjaxValidationTrait;

    /** @var Finder */
    protected $finder;


    /** @inheritdoc */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    ['allow' => true, 'actions' => ['login', 'auth'], 'roles' => ['?']],
                    ['allow' => true, 'actions' => ['login', 'auth', 'logout'], 'roles' => ['@']],
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //  'logout' => ['post']
                ]
            ]
        ];
    }

    /** @inheritdoc */
    public function actions()
    {
        return [
            'auth' => [
                'class' => AuthAction::className(),
                // if user is not logged in, will try to log him in, otherwise
                // will try to connect social account to user.
                'successCallback' => \Yii::$app->user->isGuest
                    ? [$this, 'authenticate']
                    : [$this, 'connect'],
            ]
        ];
    }

    /**
     * Displays the login page.
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['/dashboard']);
        }

        Yii::$app->getView()->theme = ThemeHelper::load('jednotka');
        //   Yii::$app->getView()->theme = ThemeHelper::load('profile');


        $model = \Yii::createObject(LoginForm::className());

        $this->performAjaxValidation($model);

        if ($model->load(Yii::$app->getRequest()->post()) && $model->login()) {
            $user = User::findOne(['id' => Yii::$app->user->id]);
            if ($user->student) {
                Yii::$app->session->set('studentId', $user->student->student_id);
                if ($user->student->completed_profile != 1) {
                    return $this->redirect(['/profile/create']);
                }

                return $this->redirect(['/student/my-account']);
            }
            if ($user->employer) {
                Yii::$app->session->set('employerId', $user->employer->employer_id);
                return $this->redirect(['/dashboard']);
                //  return $this->goBack();
            }


//            return $this->goBack();
        }

        return $this->render('login', [
            'model' => $model,
            'module' => $this->module,
        ]);
    }

    /**
     * Logs the user out and then redirects to the homepage.
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->getUser()->logout();
        return $this->goHome();
    }

    /**
     * Tries to authenticate user via social network. If user has alredy used
     * this network's account, he will be logged in. Otherwise, it will try
     * to create new user account.
     *
     * @param  ClientInterface $client
     */
    public function authenticate(ClientInterface $client)
    {
        $account = forward_static_call([
            $this->module->modelMap['Account'],
            'createFromClient'
        ], $client);

        if (null === ($user = $account->user)) {
            $this->action->successUrl = Url::to([
                '/user/registration/connect',
                'account_id' => $account->id
            ]);
        } else {
            Yii::$app->user->login($user, $this->module->rememberFor);
        }
    }

    /**
     * Tries to connect social account to user.
     *
     * @param ClientInterface $client
     */
    public function connect(ClientInterface $client)
    {
        forward_static_call([
            $this->module->modelMap['Account'],
            'connectWithUser',
        ], $client);
        $this->action->successUrl = Url::to(['/user/settings/networks']);
    }
}
