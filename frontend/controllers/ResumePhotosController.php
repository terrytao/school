<?php

namespace frontend\controllers;

use frontend\components\UploadHandler;
use frontend\models\Resume;
use Yii;
use frontend\models\ResumePhoto;
use yii\data\ActiveDataProvider;
use yii\helpers\Json;
use frontend\components\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResumePhotosController implements the CRUD actions for ResumePhoto model.
 */
class ResumePhotosController extends Controller
{
    public function beforeAction($action)
    {
        // if ($action == 'actionUpload') {
        Yii::$app->controller->enableCsrfValidation = false;

        // }

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
     * Lists all ResumePhoto models.
     * @return mixed
     */
    public function actionIndex($resumeId)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ResumePhoto::find()->where(['resume_id' => $resumeId]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResumePhoto model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionUpload($resumePhotoId)
    {
        $resumePhoto = ResumePhoto::find()->where(['resume_photo_id' => $resumePhotoId])->one();

        $resume = Resume::find()->where(['student_id' => Yii::$app->session->get('studentId')])->one();
        if ($resumePhoto->resume_id != $resume->resume_id) {
            return false;
        }
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

                $resumePhoto->photo_name = $result['uuid'] . '/' . $result['uploadName'];
                $resumePhoto->resume_id = $resume->resume_id;
                $resumePhoto->save(false);
            }
            $result['photoImg'] = $resumePhoto->getPhotoImg();
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

    /**
     * Creates a new ResumePhoto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ResumePhoto();
        $resume = Resume::find()->where(['student_id' => Yii::$app->session->get('studentId')])->one();

        $model->resume_id = $resume->resume_id;
        $model->save(false);

        return $this->redirect(['update', 'id' => $model->resume_photo_id]);

    }

    /**
     * Updates an existing ResumePhoto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $resume = Resume::find()->where(['student_id' => Yii::$app->session->get('studentId')])->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/resume-photos/index', 'resumeId' => $resume->resume_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'resume' => $resume
            ]);
        }
    }

    /**
     * Deletes an existing ResumePhoto model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $resumePhoto = ResumePhoto::find()->where(['resume_photo_id' => $id])->one();;
        $resume = Resume::find()->where([
            'resume_id' => $resumePhoto->resume_id,
            'student_id' => Yii::$app->session->get('studentId')
        ])->one();
        if ($resume) {
            $resumePhoto->deletePhoto();
        }

        return Json::encode(['success' => true]);
    }

    /**
     * Finds the ResumePhoto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return ResumePhoto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ResumePhoto::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
