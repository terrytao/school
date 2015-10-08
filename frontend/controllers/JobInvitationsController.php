<?php

namespace frontend\controllers;

use frontend\models\JobPosting;
use frontend\models\Student;
use Yii;
use frontend\models\JobInvitation;
use frontend\models\JobInvitationSearch;
use frontend\components\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JobInvitationsController implements the CRUD actions for JobInvitation model.
 */
class JobInvitationsController extends Controller
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
     * Lists all JobInvitation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JobInvitationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JobInvitation model.
     * @param string $id
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

    /**
     * Creates a new JobInvitation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($jobPostingId)
    {
        $myJobs = JobPosting::find()->where([
            'job_posting_id' => $jobPostingId
        ])//->andFilterWhere(['NOT IN', 'job_posting_id', $notIn])
        ->one();
        $model = new JobInvitation();
        $model->job_posting_id = $jobPostingId;
        $students = Student::find()->where(['major_id' => $myJobs->major_id])->all();

        if ($_POST['JobInvitation']) {
            $model->attributes = $_POST['JobInvitation'];
            $model->date_created = date("Y-m-d H:i:s");
            $model->save();

            return $this->redirect(['view', 'id' => $model->job_invitation_id]);
        } else {

            return $this->render('create', [
                'model' => $model,
                'students' => $students
            ]);
        }
    }

    /**
     * Updates an existing JobInvitation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->job_invitation_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing JobInvitation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JobInvitation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return JobInvitation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = JobInvitation::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
