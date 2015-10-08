<?php

namespace frontend\controllers;

use frontend\models\Resume;
use Yii;
use frontend\models\ResumeProject;
use yii\data\ActiveDataProvider;
use frontend\components\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResumeProjectsController implements the CRUD actions for ResumeProject model.
 */
class ResumeProjectsController extends Controller
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
     * Lists all ResumeProject models.
     * @return mixed
     */
    public function actionIndex($resumeId)
    {
        $resume = Resume::find()->where(['student_id' => Yii::$app->session->get('studentId')])->one();

        $dataProvider = new ActiveDataProvider([
            'query' => ResumeProject::find()->where(['resume_id' => $resume->resume_id]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResumeProject model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ResumeProject model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($resumeId)
    {
        $resume = Resume::find()->where(['student_id' => Yii::$app->session->get('studentId')])->one();
        $model = new ResumeProject();

        if (isset($_POST['ResumeProject'])) {
            $model->attributes = $_POST['ResumeProject'];
            $model->resume_id = $resume->resume_id;
            $model->save();

            return $this->redirect(['/resume-projects', 'resumeId' => $resume->resume_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ResumeProject model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $resume = Resume::find()->where(['student_id' => Yii::$app->session->get('studentId')])->one();
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/resume-projects', 'resumeId' => $resume->resume_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ResumeProject model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $resume = Resume::find()->where(['student_id' => Yii::$app->session->get('studentId')])->one();
        ResumeProject::find()->where(['resume_id' => $resume->resume_id, 'resume_project_id' => $id])->one()->delete();

        return $this->redirect(['/resume-projects', 'resumeId' => $resume->resume_id]);
    }

    /**
     * Finds the ResumeProject model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return ResumeProject the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ResumeProject::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
