<?php

namespace frontend\controllers;

use common\models\Major;
use common\models\SchoolMajor;

use frontend\components\job\ApplyToJob;
use frontend\models\EmployerJobSchool;
use frontend\models\EmployerJobSchoolSearch;
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
use yii\web\Request;

/**
 * EmployerController implements the CRUD actions for Employer model.
 */
class DisplayJobsController extends \frontend\components\Controller
{

    public function beforeAction($action)
    {

        if ($action->actionMethod == 'actionApply') {
            Yii::$app->controller->enableCsrfValidation = false;
        }
        if ($action->actionMethod == 'actionSave') {
            Yii::$app->controller->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

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

    /**
     * Lists all EmployerJobSchool models.
     * @return mixed
     */
    public function actionJobsToSchools()
    {
        $searchModel = new EmployerJobSchoolSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('jobs-to-schools', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @return string
     */
    public function actionJobsToStudents()
    {
        $searchModel = new JobPostingSearch();
        $dataProvider = $searchModel->searchJobsToStudents(Yii::$app->request->queryParams);
        return $this->render('jobs-to-students', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     *
     *
     * Jobs to Schools will pull from job_posting where school_id  =  myschool_id AND major_id = mymajor_id
     * @return string
     */
    public function actionStudentJobsToSchools()
    {
        $searchModel = new JobPostingSearch();
        $dataProvider = $searchModel->searchStudentJobsToSchools(Yii::$app->request->queryParams);

        return $this->render('student-jobs-to-schools', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

    public function actionStudentJobsToMe()
    {
        $searchModel = new JobPostingSearch();
        $dataProvider = $searchModel->searchStudentJobsToMe(Yii::$app->request->queryParams);

        return $this->render('student-jobs-to-me', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionApply()
    {
        $request = Yii::$app->request;
        $jobIds = $request->post('jobIds');
        print_r($jobIds);
        (new ApplyToJob())->submitApplications($jobIds, Yii::$app->session->get('studentId'));
    }

    public function actionSave(){
        $request = Yii::$app->request;
        $jobIds = $request->post('jobIds');
        print_r($jobIds);
        (new ApplyToJob())->saveApplications($jobIds, Yii::$app->session->get('studentId'));
    }
}
