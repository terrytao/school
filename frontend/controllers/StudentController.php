<?php

namespace frontend\controllers;

use frontend\models\House;
use frontend\models\Job;
use frontend\models\JobApplicant;
use frontend\models\JobApplicantSearch;
use frontend\models\JobPosting;
use frontend\models\JobPostingSearch;
use Yii;
use frontend\models\Student;
use frontend\models\StudentSearch;
use frontend\components\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
use frontend\models\StudentCreateProfileForm;
use yii\db\ActiveRecord;


/**
 * StudentController implements the CRUD actions for Student model.
 */
class StudentController extends Controller
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

    /**
     * Lists all Student models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Student model.
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
     * Creates a new Student model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {


        $model = new Student();

        if ($model->load(Yii::$app->request->post())) {


            $model->user_id = Yii::$app->user->getId();

            $model->save();

            //return $this->redirect(['view', 'id' => $model->student_id]);
            return $this->redirect('my-account');
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Student model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->student_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    public function actionUpdateStudentProfile($student_id)
    {
        // $student_profile = $this->findModel(Yii::$app->user->getId());
        $student_profile = Student::find()->where(['student_id' => $student_id])->one();

        //if ($student_profile->load(Yii::$app->request->post()) && $student_profile->save()) {
        if ($student_profile->load(Yii::$app->request->post())) {

            $student_profile->update();

            return $this->redirect('my-account');
        } else {
            return $this->render('update-student-profile',
                ['student_profile' => $student_profile,]);

        }

    }

    /**
     * Deletes an existing Student model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    public function actionMyAccount()
    {

        $student_profile = Student::find()->where(['user_id' => Yii::$app->user->getId()])->one();

        return $this->render('my-account', ['student_profile' => $student_profile]);

    }

    /**
     * Finds the Student model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Student the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Student::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionStudentCreateProfile()
    {
        $profile = New Student();

        if ($profile->load(Yii::$app->request->post())) {
                // $profile->createProfile();
            $profile->save();
            $this->redirect('my-account');


        }

        return $this->render('student-create-profile', (['profile' => $profile]));

    }

    public function actionActiveJobs($school_id = '', $major_id = '', $student_id = '')
    {

        $school_id = 57;
        $major_id = 1104;
        $student_id = 1;

        $userId = Yii::$app->user->id;
        $student = Student::find()->where(['user_id' => $userId])->one();


        $jobApplicants = JobApplicant::find()->where(['student_id' => Yii::$app->session->get('studentId')])->all();
        $notIn = [];
        foreach ($jobApplicants as $jobApplicant) {
            $notIn[] = $jobApplicant->job_posting_id;
        }
        $activeJobs = JobPosting::find()->where([
            'school_id' => $student->school_id,
            'major_id' => $student->major_id
        ])//->andFilterWhere(['NOT IN', 'job_posting_id', $notIn])
        ->all();


        return $this->render('active-job', ['activeJobs' => $activeJobs, 'jobPostingIdsApplied' => $notIn]);

    }

    //Jobs posted by employer either to me or to my major of my school
    public function actionJobsPostedToMe()
    {
        $searchModel = New JobPostingSearch();
        $dataProvider = $searchModel->searchJobPostedToMe(Yii::$app->request->queryParams);



        return $this->render('jobs-posted-to-me',[

            'searchModel'=>$searchModel,
            'dataProvider'=>$dataProvider,
            'studentSchoolId'=>Yii::$app->session->get('studentSchoolId'),
            'studentMajorId'=>Yii::$app->session->get('studentMajorId'),
        ]);


    }

    public function actionSaveJobs()
    {
        $model = New JobApplicant();
        $jobPostingId = $_GET['jobPostingId'];

        $model->student_id = Yii::$app->session->get('studentId');
        $model->job_posting_id = $jobPostingId;

        $model->time_created = date('Y-m-d H:i:s');


         $model->save();

         return $this->redirect('/job-applicant');

    }

    public function actionApplyJobs()
    {
        $jobApplicantId = $_GET['jobApplicantId'];


        $jobApplicant = New JobApplicant();
        $jobPostingId =

        $jobApplicant = JobApplicant::find()->where(['job_applicant_id'=>$jobApplicantId])->one();
        $jobAppliedCount = JobPosting::find()->where(['job_posting_id'=>$jobApplicant->job_posting_id])->count();


       // JobApplicant::model()->updateByPk($jobApplicantId, array('job_application_status'=>1));

        $command= Yii::$app->db->createCommand();

        $command->update('job_applicant', array('job_application_status' => 1, 'job_application_status_text'=>'Applied on '.date('Y-m-d')), 'job_applicant_id=:id',  array(':id'=>$jobApplicant->job_applicant_id));

        $command1= Yii::$app->db->createCommand();
        $command1->update('job_posting',   array('to_major'=>'1', 'number_of_application'=>$jobAppliedCount),                                                                            'job_posting_id=:id',  array(':id'=>$jobApplicant->job_posting_id));

        if($command->execute()){

            $command1->execute();
            return $this->redirect('/job-applicant');
            //display a message; green flash
            //send emails to employers
            //change label colour

        };






    }




}
