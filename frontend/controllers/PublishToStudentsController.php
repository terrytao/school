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
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\User;

/**
 * JobController implements the CRUD actions for Job model.
 */
class PublishToStudentsController extends Controller
{

    public function beforeAction($action)
    {
        $session = Yii::$app->session->get('createJob');

        if ($session['filterType'] == 'publishToStudents') {
            return true;
        } else {
            throw new HttpException(404, 'Filter selected doesnt match this page');
        }
    }

    public function actionSelectStudent()
    {
        $provinces = Province::find()->all();
        $schoolQuery = School::find();
        $schoolQuery->offset(0)
            ->limit(100);
        $schools = $schoolQuery->all();
        $data['schools'] = $schools;
        $data['request'] = Yii::$app->request;
        $data['provinces'] = Province::find()->all();
        $data['session'] = Yii::$app->session->get('createJob');
        return $this->render('select-student', $data);
    }

    public function actionAjaxSchoolFilter()
    {
        $request = Yii::$app->request;
        return (new PublishToStudents())->ajaxGetSchools($request);
    }

    public function actionAbout()
    {
        return $this->render('@app/views/publish-to-schools/about');
    }
}
