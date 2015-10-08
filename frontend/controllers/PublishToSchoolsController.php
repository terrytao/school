<?php

namespace frontend\controllers;

use common\models\SchoolMajor;
use DateTime;
use frontend\components\job\PublishToMajors;
use frontend\components\job\PublishToSchools;
use frontend\components\job\PublishToStudents;
use frontend\components\JobHelper;
use frontend\components\JobSessionHelper;
use frontend\components\UploadHandler;
use frontend\components\WordPHP;
use frontend\models\Employer;
use frontend\models\JobApplicant;
use frontend\models\JobInvitation;
use frontend\models\JobPosting;
use frontend\models\Province;
use frontend\models\School;

use frontend\models\Student;
use Yii;
use frontend\models\Job;
use frontend\models\JobSearch;
use frontend\components\Controller;
use yii\data\Pagination;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\User;

/**
 * JobController implements the CRUD actions for Job model.
 */
class PublishToSchoolsController extends Controller
{




    public function beforeAction($action)
    {
        $session = Yii::$app->session->get('createJob');

        if ($session['filterType'] == 'publishToSchools') {
            return true;
        }
    }

    /**
     * publish-to-schools
     * @return string
     */
    public function actionSelectMajor()
    {
        $session = Yii::$app->session->get('createJob');
        $data['session'] = $session;
        return $this->render('select-major', $data);
    }


    public function actionSelectSchools()
    {
        $request = Yii::$app->request;
        if (isset($_GET['schoolId'])) {
            JobSessionHelper::set('schoolIds', $request->get('schoolId'));
            return $this->redirect(['overview']);
        } else if ($request->post('allSchools')) {
            JobSessionHelper::set('schoolIds', $request->post('allSchools'));
            return $this->redirect(['overview']);
        }
    }

    public function actionOverview()
    {
        $session = Yii::$app->session->get('createJob');
        $schools = School::find()->where(['IN', 'school_id', explode(',', $session['schoolIds'])])->all();
        $data['schools'] = $schools;
        return $this->render('overview', $data);
    }

    /**
     * publish-to-schools
     * @return string
     */
    public function actionAjaxGetSchools()
    {
        $request = Yii::$app->request;

        if ($request->isAjax) {
            return (new PublishToSchools())->ajaxGetSchools($request);
        }
    }


    //this is to test the tree view plugin, select multiple major ids to pull out schools
    public function actionGetSchoolByMajorId()
    {
        $schoolMajor = SchoolMajor::find()->where(['major_id'=>2116])->all();

//
//        $view = Yii::$app->view->render('@app/views/publish-to-schools/_school', [ 'schoolMajor' => $schoolMajor]);
//        return Json::encode($view);

        return $this->render('get-school-by-major-id', (['schoolMajor'=>$schoolMajor]));
    }


    //this is to test the tree view plugin, select multiple major ids to pull out schools
    public function actionAbout()
    {
      //  $schoolMajor = SchoolMajor::find()->where(['major_id'=>2116])->all();

     $request = Yii::$app->request;

        if ($request->isAjax) {
            return (new PublishToSchools())->about($request);
        }
    }
}
