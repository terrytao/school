<?php

namespace frontend\controllers;

use common\models\SchoolMajor;
use DateTime;
use frontend\components\job\PublishToMajors;
use frontend\components\job\PublishToSchools;
use frontend\components\job\PublishToStudents;
use frontend\components\JobHelper;
use frontend\components\JobSessionHelper;
use frontend\components\PostJobLive;
use frontend\components\UploadHandler;
use frontend\components\WordPHP;
use frontend\filters\AccessRule;
use frontend\models\Employer;
use frontend\models\JobApplicant;
use frontend\models\JobInvitation;
use frontend\models\JobPosting;
use frontend\models\Major;
use frontend\models\Province;
use frontend\models\School;
use frontend\models\SchoolMajorStudent;
use frontend\models\Student;
use Yii;
use frontend\models\Job;
use frontend\models\JobSearch;
use frontend\components\Controller;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\User;
use frontend\components\ThemeHelper;

/**
 * JobController implements the CRUD actions for Job model.
 */
class JobController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'rules' => [
                    [
                        // 'actions' => ['create'],
                        'allow' => true,
                        'roles' => ['employer'],
                    ],

                ],
            ],
        ];
    }

    public function beforeAction($action)
    {
        // if ($action == 'actionUpload') {
        Yii::$app->controller->enableCsrfValidation = false;

        // }

        return parent::beforeAction($action);
    }

    /**
     * Lists all Job models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JobSearch();
        $dataProvider = $searchModel->searchActive(Yii::$app->request->queryParams);

        Yii::$app->session->set('createJob', null);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionPublishJobs()
    {
        JobSessionHelper::set('jobs', $_POST['jobs']);
        $data['redirect'] = '/job/publish-now';
        $data['success'] = true;
        return Json::encode($data);
    }


    /**
     * Displays a single Job model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $myJobs = JobPosting::find()->where([
            'job_posting_id' => $id
        ])//->andFilterWhere(['NOT IN', 'job_posting_id', $notIn])
        ->one();
        $jobInvitation = new JobInvitation();
        $students = Student::find()->where(['major_id' => $myJobs->major_id])->all();

        return $this->render('view', [
            'model' => $this->findModel($id),
            'students' => $students,
            'jobInvitation' => $jobInvitation
        ]);
    }


    public function actionApply($jobId)
    {
        $userId = Yii::$app->user->id;
        $student = Student::find()->where(['user_id' => $userId])->one();

        // employer get an email

        // update job application in database

        // update number of job applications for job

        // student gets confirmation email


        $job = Job::find()->where(['job_id' => $jobId])->one();
        $data['job'] = $job;
        $data['student'] = $student;

        return $this->render('apply', $data);
    }

    /**
     * Creates a new Job model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $job = New Job();
        $employer = Employer::Find()->where(['user_id' => Yii::$app->user->getId()])->One();
        $job->employer_id = $employer->employer_id;
        $job->time_created = date("Y-m-d H:i:s");


        if ($job->load(Yii::$app->request->post())) {
            if ($job->expiration_date == '1w') {
                $interval = 'P7D';
            } elseif ($job->expiration_date == '2w') {
                $interval = 'P14D';
            } elseif ($job->expiration_date == '3w') {
                $interval = 'P21D';
            } elseif ($job->expiration_date == '1m') {
                $interval = 'P1M';
            } elseif ($job->expiration_date == '2m') {
                $interval = 'P2M';
            }

            $dateExp = (new DateTime($job->time_created))->add(new \DateInterval($interval));
            $job->expiration_date = $dateExp->format("Y-m-d H:i:s");
            $job->employer_id = Yii::$app->session->get('employerId');
            if ($job->save()) {
                // return $this->redirect(['view', 'id' => $job->job_id]);
                return $this->redirect('index');
            } else {
                print_r($job->getErrors());
                die;
            }
        }

        return $this->render('create', [
            'model' => $job,

        ]);

    }

    public function actionUpload()
    {

        $uploader = new UploadHandler();
        $uploader->allowedExtensions = array(); // all files types allowed by default
// Specify max file size in bytes.
        $uploader->sizeLimit = 10 * 1024 * 1024; // default is 10 MiB
// Specify the input name set in the javascript.
        $uploader->inputName = "qqfile"; // matches Fine Uploader's default inputName value by default
// If you want to use the chunking/resume feature, specify the folder to temporarily save parts.
        $uploader->chunksFolder = "chunks";
        $method = $_SERVER["REQUEST_METHOD"];
        if ($method == "POST") {
            header("Content-Type: text/plain");
            // Assumes you have a chunking.success.endpoint set to point here with a query parameter of "done".
            // For example: /myserver/handlers/endpoint.php?done
            if (isset($_GET["done"])) {
                $result = $uploader->combineChunks("uploads");
            } // Handles upload requests
            else {
                // Call handleUpload() with the name of the folder, relative to PHP's getcwd()
                $result = $uploader->handleUpload("uploads");
                // To return a name used for uploaded file you can use the following line.
                $result["uploadName"] = $uploader->getUploadName();

                $word = (new WordPHP())->readDocxFile('uploads/' . $result["uuid"] . '/' . $result["uploadName"]);
                $result['data'] = $word;
            }

            echo json_encode($result);
        } // for delete file requests
        else {
            if ($method == "DELETE") {
                $result = $uploader->handleDelete("uploads");
                echo json_encode($result);
            } else {
                header("HTTP/1.0 405 Method Not Allowed");
            }
        }

    }

    public function actionMyJobs()
    {
        $jobApplicants = JobApplicant::find()
            ->where(['student_id' => Yii::$app->session->get('studentId')])
            ->all();

        return $this->render('my-jobs', ['jobApplicants' => $jobApplicants]);
    }

    public function actionMyInvitations()
    {
        $studentId = Yii::$app->session->get('studentId');

        $jobApplicants = JobApplicant::find()->with(['jobPostingInvitations'])->where(['jobPostingInvitations.student_id' => $studentId])
            ->where(['student_id' => $studentId])
            ->all();

        return $this->render('my-invitations', ['jobApplicants' => $jobApplicants]);
    }


    /**
     * Updates an existing Job model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->job_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Job model.
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
     * Finds the Job model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Job the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Job::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * First step for publishing a job
     * @return string
     */
    public function actionPublishNow($majorIds='')
    {
        $majorArr = [];
        $majors = Major::find()->all();
        foreach ($majors as $major) {
            $majorArr[$major->major_id] = ['id' => $major->major_id, 'text' => $major->major_name . ' ' . $major->major_level];
        }

        $data['majors'] = $majorArr;
        $data['majorId'] = $majorIds;

        return $this->render('publish-now', $data);
    }

    public function actionAjaxSelect2SelectMajor()
    {
        $majorsQuery = Major::find()->filterWhere(['LIKE', 'major_name_keyword', @$_GET['q']])->orFilterWhere(['LIKE', 'major_name', $_GET['q']]);

        // echo $majorsQuery->createCommand()->getRawSql();

        $majors = $majorsQuery->all();
        $majorArr = [];
        foreach ($majors as $major) {
            $majorArr[] = ['id' => $major->major_id, 'text' => $major->major_name . ' ' . $major->major_level];
        }
        return Json::encode($majorArr);
    }

//    JobSessionHelper::set('degreeLevel', $_POST['degreeLevel']);

    public function actionAjaxPublishToStudents()
    {
        $request = Yii::$app->request;
        JobSessionHelper::set('schoolIds', $request->post('schoolIds'));

        return (new PublishToStudents())->ajaxGetStudents($request);
    }

    /**
     *
     */
    public function actionAjaxPublishToSchools()
    {
        $request = Yii::$app->request;
        JobSessionHelper::set('majorIds', $request->post('majors'));
        return (new PublishToSchools())->ajaxGetSchools(Yii::$app->request);

        //Json::encode($this->renderPartial('patrtials/_schools'));
    }

    public function actionAjaxTreeLevelFilter()
    {
        $request = Yii::$app->request;
        if ($request->post('level') == 'treeBachelor') {
            $view = $this->renderPartial('trees/_bachelor-tree');
            return Json::encode($view);
        }
    }

    /**
     * Select schools then redirect to preview page
     * @return string
     */
    public function actionAjaxSelectSchools()
    {

        $request = Yii::$app->request;
        JobSessionHelper::set('schoolIds', $request->post('schoolIds'));
        JobSessionHelper::set('type', 'publishToSchools');
        $data['redirect'] = '/job/preview';
        $data['success'] = true;
        return Json::encode($data);
    }

    /**
     * Select students then redirect to preview page
     * @return string
     */
    public function actionAjaxSelectStudents()
    {

        $request = Yii::$app->request;
        JobSessionHelper::set('studentIds', $request->post('students'));
        JobSessionHelper::set('type', 'publishToStudents');
        $data['redirect'] = '/job/preview';
        $data['success'] = true;
        return Json::encode($data);
    }


    /**
     * Final step in publishing a job
     */
    public function actionPreview()
    {
        $data['session'] = Yii::$app->session->get('createJob');
        $majors = $data['session']['majorIds'];


        if (count($data['session']['majorIds']) > 1)
            $majorQuery = Major::find()->where(['IN', 'major_id', $data['session']['majorIds']]);
        else
            $majorQuery = Major::find()->where(['major_id' => $data['session']['majorIds']]);

        $data['majors'] = $majorQuery->all();


        if (count($data['session']['schoolIds']) > 1)
            $data['schools'] = School::find()->where(['IN', 'school_id', $data['session']['schoolIds']])->all();
        else
            $data['schools'] = School::find()->where(['school_id' => $data['session']['schoolIds']])->all();


        if (array_key_exists('studentIds', $data['session'])) {
            if (count(@$data['session']['studentIds']) > 1) {
                $studentQuery = Student::find()->where(['student.student_id' => $data['session']['studentIds']])
                    ->joinWith(['schoolMajorStudents' => function ($query) use ($majors) {
                        $query->andWhere(['IN', 'school_major_student.major_id', $majors]);
                    }]);
            } else {
                $studentQuery = Student::find()->where(['student.student_id' => $data['session']['studentIds']])
                    ->joinWith(['schoolMajorStudents' => function ($query) use ($majors) {
                        $query->andWhere(['IN', 'school_major_student.major_id', $majors]);
                    }]);
            }

            $data['students'] = $studentQuery->all();
        }

        if (count($data['session']['jobs']) > 1)
            $data['jobs'] = Job::find()->select('job_id')->where(['IN', 'job_id', $data['session']['jobs']])->all();
        else
            $data['jobs'] = Job::find()->select('job_id')->where(['job_id' => $data['session']['jobs']])->all();


        return $this->render('preview', $data);
    }

    /**
     * HERE
     */
    public function actionPostJobsLive()
    {
        (new PostJobLive())->publish();
        (new PostJobLive())->populateJobsToSchools();

        Yii::$app->session->remove('createJob');
        return $this->render('post-jobs-live');

    }

    public function actionJobsToStudents()
    {


    }
}
