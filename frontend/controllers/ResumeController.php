<?php

namespace frontend\controllers;

use common\models\Major;
use frontend\components\ThemeHelper;
use frontend\models\ResumeCourse;
use frontend\models\Student;
use frontend\models\StudentSearch;
use Yii;
use frontend\models\Resume;
use frontend\models\ResumeSearch;
use frontend\components\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResumeController implements the CRUD actions for Resume model.
 */
class ResumeController extends Controller
{

    public function actionSearch($majorId)
    {
        $searchModel = new StudentSearch();
        $searchModel->major_id = $majorId;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $major = Major::find()->where(['major_id' => $majorId])->one();

        return $this->render('search', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'major' => $major
        ]);
    }

    /**
     * Lists all Resume models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResumeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $resume = Resume::find()->where(['student_id' => Yii::$app->session->get('studentId')])->one();

        return $this->render('index', [
            'resume' => $resume,

        ]);
    }

    /**
     * Displays a single Resume model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($resumeId, $resumeSlug)
    {
       // $this->layout = "@app/views/layouts/resume";

        $model = Resume::find()->where(['resume_slug' => $resumeSlug, 'resume_id' => $resumeId])->one();
        return $this->render('view', [
            'model' => $model,
        ]);
    }


    public function actionViewResume($id = '')
    {
        // call the theme helper file to load up the correct theme
        $this->getView()->theme = ThemeHelper::load();
        // $this->getView() all it does is call the View class I just showed you
        // u can talk to me using comments //

        $resume = Resume::find()->where(['resume_id' => $_GET['resumeId']])->one();
        Yii::$app->view->params['layoutStudentName'] = $resume->student->student_name;
        $courses = ResumeCourse::find()->where(['resume_id' => $_GET['resumeId']])->all();


        //  $this->layout = "@app/views/layouts/resume";
        return $this->render('view-resume', [
            'model' => $resume,
            'courses' => $courses,
        ]);
    }

    /**
     * Creates a new Resume model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateResumeTitle()
    {
        //$student = Student::findOne(['user_id' => Yii::$app->user->getId()]);

       // $resume = Resume::find()->where(['student_id' => Yii::$app->session->get('studentId')])->one();

        $model = new Resume();

        if ($model->load(Yii::$app->request->post())) {
           // $student_id = $student->student_id;
            $student_id = Yii::$app->session->get('studentId');

            $model->student_id = $student_id;

            $model->save();

            return $this->redirect(['my-resume', 'model' => $model]);
           // return $this->redirect(['create-resume-other-item']);
        } else {
            return $this->render('create-resume-title', [
                'model' => $model,
            ]);
        }
    }

    public function actionResumeCourses($resumeId)
    {
        $resume = Resume::find()->where(['student_id' => Yii::$app->session->get('studentId')])->one();

        $resumeCourse = new ResumeCourse;

        if (isset($_POST['ResumeCourse'])) {
            $resumeCourse->attributes = $_POST['ResumeCourse'];
            $resumeCourse->resume_id = $resume->resume_id;
            $resumeCourse->save();

            return $this->redirect(['/resume/resume-courses', 'resumeId' => $resumeId]);
        }

        return $this->render('resume-courses', [
            'resumeCourse' => $resumeCourse,
            'resume' => $resume,
        ]);
    }

    /**
     * Updates an existing Resume model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['/resume-courses', 'resumeId' => $model->resume_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Resume model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($resumeId)
    {
        $this->findModel($resumeId)->delete();
       // $resume = Resume::find()->where(['resume_id' => $_GET['resumeId']])->one();

        return $this->redirect(['my-resume']);
    }

    /**
     * Finds the Resume model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Resume the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Resume::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    //dashboard My Resume link to this page
    public function actionMyResume()
    {
        $model = Resume::find()->where(['student_id'=>Yii::$app->session->get('studentId')])->all();

        //$this->getView()->theme = ThemeHelper::load('profile');
        return $this->render('my-resume',[
                'model'=>$model,
                ]

            );
    }

    public function actionCreateResumeOtherItem()
    {
        $model = Resume::find()
            ->where(['student_id'=>Yii::$app->session->get('studentId')])

            ->orderBy('resume_id DESC')->all();

       // print_r($model); die;

        return $this->render('create-resume-other-item',[
                'model'=>$model,
            ]

        );
    }

    public function actionEditAboutMe($resumeId)
    {

        $model = $this->findModel($resumeId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['create-resume-other-item', 'resumeId' => $model->resume_id]);
        } else {
            return $this->render('edit-about-me', [
                'model' => $model,
            ]);
        }
    }

    public function actionPreviewAboutMe($resumeId)
    {
        $this->getView()->theme = ThemeHelper::load();
        $model = $this->findModel($resumeId);
       // print_r($model); die;
       // Yii::$app->view->params['layoutStudentName'] = $resume->student->student_name;
        return $this->render('preview-about-me',[
            'model'=>$model,
        ]);
    }
}
