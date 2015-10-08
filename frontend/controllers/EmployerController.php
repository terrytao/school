<?php

namespace frontend\controllers;

use common\models\Major;
use common\models\SchoolMajor;
use frontend\models\Job;
use frontend\models\JobApplicant;
use frontend\models\JobPosting;
use frontend\models\JobPostingSearch;
use frontend\models\School;
use Yii;
use frontend\models\Employer;
use frontend\models\EmployerSearch;
use yii\data\ActiveDataProvider;
use yii\helpers\Json;
use frontend\components\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\db\Query;

/**
 * EmployerController implements the CRUD actions for Employer model.
 */
class EmployerController extends \frontend\components\Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actionTest()
    {
        echo Yii::$app->mailer->compose()
            ->setFrom('petschephp@gmail.com')
            ->setTo('petschephp@gmail.com')
            ->setSubject('Message subject')
            ->send();
    }

    public function beforeAction($action)
    {

        Yii::$app->controller->enableCsrfValidation = false;


        return parent::beforeAction($action);
    }

    /**
     * Lists all Employer models.
     * @return mixed
     */
    public function actionIndex()
    {
        //  Yii::$app->session->set('employerId', 8);
        $searchModel = new EmployerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionProfile()
    {
        $model = Employer::findOne(['user_id' => Yii::$app->user->id, 'employer_id' => Yii::$app->session->get('employerId')]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['profile']);
        } else {
            return $this->render('profile', ['model' => $model]);
        }
    }

    /**
     * Displays a single Employer model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    /**
     * Updates an existing Employer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->employer_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Employer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    /**
     * Finds the Employer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Employer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Employer::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionEmployerMyAccount()
    {
        $employer_profile = Employer::find()->where(['user_id' => Yii::$app->user->getId()])->one();

        return $this->render('employer-my-account', ['employer_profile' => $employer_profile]);

    }

    public function actionEmployerCreateProfile($employer_id)
    {
        $employer_profile = Employer::find()->where(['employer_id' => $employer_id])->one();

        //if ($student_profile->load(Yii::$app->request->post()) && $student_profile->save()) {
        if ($employer_profile->load(Yii::$app->request->post())) {

            $employer_profile->update();

            return $this->redirect('employer-my-account');
        } else {
            return $this->render('employer-create-profile',
                ['employer_profile' => $employer_profile,]);

        }

    }


    public function actionSetJobsToBePublished()
    {
        //die;
        $publishJobIds = $_POST['jobs'];

        // set the job ids for later use
        //////////////////////////////////
        ////////////////////////////
        Yii::$app->session->set('publishJobIds', $publishJobIds);
//////////////////////////
//
        $result['success'] = true;
        $result['redirect'] = Yii::$app->urlManager->createUrl(['employer/publish-job-step1']);

        return Json::encode($result);
    }


    public function actionMyPublishedJobs()
    {
        $searchModel = New JobPostingSearch();

        $dataProvider = $searchModel->searchJobPostedByEmployer(Yii::$app->request->queryParams);

        return $this->render('my-published-jobs', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionMyJobApplicants($jobPostingId)
    {

        $query = JobApplicant::find()->where(['job_posting_id' => $jobPostingId]);

        $dataProvider = New ActiveDataProvider([
            'query' => $query,
        ]);


        return $this->render('my-job-applicants', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
