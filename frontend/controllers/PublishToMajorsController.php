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
class PublishToMajorsController extends Controller
{

    public function beforeAction($action)
    {
        $session = Yii::$app->session->get('createJob');

        if ($session['filterType'] == 'publishToMajors') {
            return true;
        }
    }

    /**
     * publish-to-majors
     * @return string
     */
    public function actionSelectSchool()
    {
        $provinces = Province::find()->all();
        $schoolQuery = School::find();
        //  $schoolCount = $schoolQuery->count();
        // create a pagination object with the total count
        // $pagination = new Pagination(['totalCount' => $schoolCount]);


        $schoolQuery->offset(0)
            ->limit(100);
        $schools = $schoolQuery->all();
        $data['pagination'] = @$pagination;
        $data['schools'] = $schools;
        $data['provinces'] = $provinces;
        $data['request'] = Yii::$app->request;

        return $this->render('select-school', $data);
    }


    /**
     * publish-to-majors
     * @return string
     */
    public function actionAjaxFilterSchools()
    {
        $request = Yii::$app->request;
        return (new PublishToMajors())->ajaxFilterSchools($request);
    }

    /**
     * publish-to-majors
     * @return string
     */
    public function actionAjaxGetSchoolMajors()
    {
        $request = Yii::$app->request;
        return (new PublishToMajors())->ajaxGetSchoolMajors($request);
    }
}
