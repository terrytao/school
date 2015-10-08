<?php
namespace frontend\controllers;


use frontend\components\ThemeHelper;
use frontend\models\Employer;
use frontend\models\School;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\base\Model;
use yii\helpers\Json;
use yii\web\BadRequestHttpException;
use frontend\components\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\Student;
use frontend\models\StudentSignupForm;
use frontend\models\EmployerSignupForm;
use yii\web\User;
use yii\db\ActiveRecord;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest) {
            Yii::$app->getView()->theme = ThemeHelper::load('frontend');
        }
        // if ($action == 'actionUpload') {
        Yii::$app->controller->enableCsrfValidation = false;

        // }

        return parent::beforeAction($action);
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    /**
     * @inheritdoc
     */

    public function actionIndex()
    {
        Yii::$app->getView()->theme = ThemeHelper::load('jednotka');

        return $this->render('index');
    }


    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success',
                    'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }


    public function actionStudentCreateProfile()
    {
        $model = New StudentSignupForm();

        if ($model->load(Yii::$app->request->post())) {

            $model->signup();

            return $this->redirect('about');

        } else {
            return $this->redirect('index');
        }


        return $this->render('student-create-profile', ['model' => $model]);
    }

    public function actionFaq()
    {
        $this->getView()->theme = ThemeHelper::load('profile');

        return $this->render('faq');
    }

    public function actionDashboard()
    {
        $this->getView()->theme = ThemeHelper::load('profile');

        return $this->render('/site/dashboard');
    }

    public function actionTest(){
        return $this->render('test');
    }
}
