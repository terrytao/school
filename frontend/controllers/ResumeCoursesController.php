<?php

namespace frontend\controllers;

use frontend\models\Resume;
use Yii;
use frontend\models\ResumeCourse;
use yii\data\ActiveDataProvider;
use frontend\components\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResumeCoursesController implements the CRUD actions for ResumeCourse model.
 */
class ResumeCoursesController extends Controller
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
     * Lists all ResumeCourse models.
     * @return mixed
     */
    public function actionIndex($resumeId)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ResumeCourse::find()->where(['resume_id' => $resumeId]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResumeCourse model.
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
     * Creates a new ResumeCourse model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $model = new ResumeCourse();
        $resume = Resume::find()->where(['student_id' => Yii::$app->session->get('studentId')])->one();

        if (isset($_POST['ResumeCourse'])) {
            $model->resume_id = $resume->resume_id;
            $model->save();

            return $this->redirect(['/resume-courses', 'resumeId' => $resume->resume_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ResumeCourse model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->resume_course_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ResumeCourse model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $resume = Resume::find()->where(['student_id' => Yii::$app->session->get('studentId')])->one();
        ResumeCourse::find()->where(['resume_id' => $resume->resume_id, 'resume_course_id' => $id])->one()->delete();

        return $this->redirect(['/resume-courses', 'resumeId' => $resume->resume_id]);
    }

    /**
     * Finds the ResumeCourse model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return ResumeCourse the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ResumeCourse::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
