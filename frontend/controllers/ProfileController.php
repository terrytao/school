<?php
namespace frontend\controllers;

use Appsco\PanCropBundle\Form\Type\PanCropFormType;
use Appsco\PanCropBundle\Image\ImageCropper;
use common\models\SchoolMajor;
use frontend\components\Crop;
use frontend\components\ImageManipulator;
use frontend\components\UploadHandler;
use frontend\filters\AccessRule;
use frontend\models\Major;
use frontend\models\School;
use frontend\models\SchoolDistribution;
use frontend\models\SchoolMajorStudent;
use frontend\models\Student;
use Imagine\Gd\Imagine;
use newerton\jcrop\jCrop;
use PHPImageWorkshop\ImageWorkshop;
use Yii;
use frontend\components\Controller;
use frontend\models\StudentCreateProfileForm;
use yii\db\Query;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\imagine\Image;


class ProfileController extends Controller
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
                        'roles' => ['student'],
                    ],

                ],
            ],
        ];
    }
    public function beforeAction($action)
    {

        if ($action->actionMethod == 'actionUpload') {
            Yii::$app->controller->enableCsrfValidation = false;

        }

        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        $student = Student::findOne(['student_id' => Yii::$app->session->get('studentId')]);
        $data['student'] = $student;
        return $this->render('index', $data);
    }


    public function actionCreate()
    {
        // $model = New StudentCreateProfileForm();
        $model = Student::findOne(['student_id' => Yii::$app->session->get('studentId')]);
        $request = Yii::$app->request;

        if (isset($_POST['Student'])) {
            $model->attributes = $_POST['Student'];
            $studentMajorIds = explode(',', $_POST['Student']['major_id']);

            foreach ($studentMajorIds as $studentMajorId) {
                if ($studentMajorId != "") {

                    $schoolMajorStudent = new SchoolMajorStudent();
                    $schoolMajorStudent->school_id = $model->school_id;
                    $schoolMajorStudent->student_id = Yii::$app->session->get('studentId');
                    $schoolMajorStudent->major_id = $studentMajorId;
                    $schoolMajorStudent->save(false);
                }
            }
            $model->save();

            $this->redirect(['/profile/upload-image']);
        }


        $schools = School::find()->select("school_name")->all();
        $out = [];
        foreach ($schools as $d) {
            $out[] = ['value' => $d->school_name];
        }
        // this view needs to be moved to the profile folder
        return $this->render('create', (['schools' => $out, 'model' => $model]));
    }

    public function actionUploadImage()
    {
        return $this->render('upload-image');
    }

    public function actionSampleProfile()
    {
        return $this->render('sample-profile');
    }

    public function actionAjaxFindMajors()
    {
        $q = $_GET['q'];
        $schoolId = $_GET['schoolId'];

        $majors = Major::find()
            ->filterWhere(['LIKE', 'major.major_name', $q])->all();

        $out = [];
        foreach ($majors as $major) {
            $out[] = ['id' => $major->major_id, 'text' => @$major->major_name];
        }

        return Json::encode($out);
    }

    public function actionTest()
    {

        $schoolDistributions = SchoolDistribution::find()->distinct()->orderBy('percentage DESC')->groupBy('school_province')->limit(10)->all();

        $schoolDistributionArr = [];
        foreach ($schoolDistributions as $schoolDistribution) {
            $color = dechex(rand(0x000000, 0xFFFFFF));;

            $schoolDistributionArr[] = [
                'label' => $schoolDistribution->school_province,
                'data' => $schoolDistribution->percentage * 100,
                'color' => '#' . $color];
        }

        $data['schoolDistribution'] = Json::encode($schoolDistributionArr);

        return $this->render('test', $data);
    }

    public function actionCrop()
    {

        $tmpProfileImage = Yii::$app->session->get('tmpProfileImage');

        $src = 'tmp/' . $tmpProfileImage['uuid'] . '/' . $tmpProfileImage['uploadName'];
        $newFileName = explode('.', $tmpProfileImage['uploadName']);

        $student = Student::findOne(['student_id' => Yii::$app->session->get('studentId')]);

        $imageName = 'profile_image_cropped.' . $newFileName[1];
        $newFileNameCrop = $student->getImageDirectory() . '/' . $imageName;

        $h = $_POST['h'];
        $w = $_POST['w'];
        $x1 = $_POST['x1'];
        $x2 = $_POST['x2'];
        $y1 = $_POST['y1'];
        $y2 = $_POST['y2'];
//header('Content-Type: image/png');

        $fileContent = (new Crop())->cropImage($src, $x1, $y1, $x2, $y2, $w, $h, $newFileNameCrop);
        $student = Student::findOne(['student_id' => Yii::$app->session->get('studentId')]);
        $student->profile_image = $imageName;
        $student->save(false);
        $result['success'] = true;
        return Json::encode($result);
    }

    public function actionUpload()
    {
        $student = Student::findOne(['student_id' => Yii::$app->session->get('studentId')]);
        $student->getImageDirectory();
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
                $result = $uploader->combineChunks("tmp");
            } // Handles upload requests
            else {
                // Call handleUpload() with the name of the folder, relative to PHP's getcwd()
                $result = $uploader->handleUpload("tmp");
                // To return a name used for uploaded file you can use the following line.
                $result["uploadName"] = $uploader->getUploadName();

            }
            if (array_key_exists('error', $result)) {
                return Json::encode($result);
            }

            Yii::$app->session->set('tmpProfileImage', $result);
            $result['crop'] = Yii::$app->view->render('@app/views/profile/_crop', ['result' => $result]);

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
}