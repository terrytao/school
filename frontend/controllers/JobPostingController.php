<?php

namespace frontend\controllers;

use frontend\models\JobInvitation;
use frontend\models\Major;
use frontend\models\Student;
use frontend\models\School;

use Yii;

use frontend\models\JobPosting;
use frontend\models\JobPostingSearch;
use frontend\components\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JobPostingController implements the CRUD actions for JobPosting model.
 */
class JobPostingController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
//                'action' => [
//                    'delete' => ['post'],
//                ],
            ],
        ];
    }

    /**
     * Lists all JobPosting models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JobPostingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JobPosting model.
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
            'jobInvitation'=>$jobInvitation
        ]);
    }

    /**
     * Creates a new JobPosting model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new JobPosting();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->job_posting_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing JobPosting model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->job_posting_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing JobPosting model.
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
     * Finds the JobPosting model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return JobPosting the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = JobPosting::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionPickMajorLevel()
    {
        $model = New Major();
        //print_r($model); die;
        return $this->render('pick-major-level',[
            'model'=>$model,
        ]);
    }

    public function actionJobPostedToSchool()
    {
       // $model = JobPosting::find()->groupBy('school_id', 'major_id')->count();
        //$model = JobPosting::find()->all();
        $model = JobPosting::find()->select('school_id, major_id')->all();


        // $model = Yii::$app->db->createCommand()->select( * from job_posting->queryRow();

        /*
            ->select('school_id, major_id, count(*) as quantity')
            ->from('job_posting')
            ->groupby('school_id','major_id')
            ->queryRow();
        /*
        $model = Yii::$app->db->createCommand()
            ->select('school_id, major_id, count(*) as quantity')
            ->from('job_posting')
            ->groupby('school_id','major_id')
            ->queryRow()->all;
        */
        return $this->render('job-posted-to-school',[
                'model'=>$model,
            ]

        );
    }
}
