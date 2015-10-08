<?php

namespace frontend\components\job;

use frontend\components\MySqlLog;
use frontend\models\Province;
use frontend\models\School;
use frontend\models\SchoolMajor;
use frontend\models\SchoolMajorStudent;
use frontend\models\Student;
use Yii;
use yii\data\Pagination;
use yii\helpers\Json;
use yii\web\Request;

class PublishToStudents
{
    protected $jobSession;

    public function __construct()
    {
        $session = Yii::$app->session->get('createJob');
        $this->jobSession = $session;
    }

    public function ajaxGetSchools(Request $request)
    {
        $request = Yii::$app->request;
        $provinces = Province::find()->all();
        $majorId = $request->post('majorId', '');
        $is211 = $request->post('is211', '');
        $is985 = $request->post('is985', '');
        $province = $request->post('province');
        $session = Yii::$app->session->get('createJob');

        if ($is211 || $is985 || $province) {

        } else {
            $schoolWhere = ['schools'];
        }


        //$majorId = 1178;
        $schoolMajorQuery = SchoolMajor::find()->joinWith($schoolWhere = ['schools' => function ($query) use ($is211, $is985, $province) {
            if ($is211) {
                $query->andWhere(['=', 'is_211', $is211]);
            }
            if ($is985) {
                $query->andWhere(['=', 'is_985', $is985]);
            }
            if ($province) {
                $query->andWhere(['=', 'school_province', $province]);
            }

        },
//            'majors' => function ($query) use ($session) {
//                $query->andWhere(['=', 'school_major.major_level', $session['degreeLevel']]);
//            }

        ])
            ->groupBy('school_id')
            ->where(['school_major.major_id' => $majorId]);

        // echo $schoolMajorQuery->createCommand()->getRawSql();die;
        $schoolMajors = $schoolMajorQuery->all();

        $data['schoolMajors'] = $schoolMajors;
        $data['request'] = $request;
        $data['provinces'] = $provinces;

        $view = Yii::$app->view->render('@app/views/publish-to-students/_schools', $data);
        return Json::encode($view);
    }

    public function ajaxGetStudents(Request $request)
    {

//        $provinces = Province::find()->all();
//        $majorName = $request->post('majorName', '');
//        $is211 = $request->post('is211', '');
//        $is985 = $request->post('is985', '');
//        $province = $request->post('province');
        //  $majors = explode(',', $request->post('majors'));
        $schoolIds = $request->post('schoolIds');

        if(!$schoolIds){

            $data['schoolMajorStudent'] = [];
            $result['students'] = Yii::$app->view->render('@app/views/job/partials/_students', $data);
            return Json::encode($result);
        }
        if (count($_POST) == 0) {

            $data['schoolMajorStudent'] = [];
            $result['students'] = Yii::$app->view->render('@app/views/job/partials/_students', $data);
            return Json::encode($result);
        }

//        $schoolMajorsQuery = SchoolMajor::find();


//        if (count($majorArr)>0)
//            $schoolMajorsQuery->andWhere(['IN', 'major_id', $majorArr]);
//
//        if ($schoolIds != "")
//            $schoolMajorsQuery->andWhere(['IN', 'school_id', $schoolIds]);
//
//
//        $schoolMajors = $schoolMajorsQuery->all();
//
//
//        $result['filter'] = Yii::$app->view->render('@app/views/job/partials/_school-filter', ['request' => $request, 'provinces' => $provinces]);
//        $result['schools'] = Yii::$app->view->render('@app/views/job/partials/_schools', [
//                'provinces' => $provinces,
//                'request' => $request,
//                'schoolMajors' => $schoolMajors]
//        );
//
        $schoolMajorStudentQuery = SchoolMajorStudent::find();

        $majorIds = $request->post('majorIds');


        if (count($majorIds) > 0)
            $schoolMajorStudentQuery->andWhere(['IN', 'major_id', $majorIds]);

        if (count($schoolIds) > 0)
            $schoolMajorStudentQuery->andWhere(['IN', 'school_id', $schoolIds]);


        MySqlLog::logQuery($schoolMajorStudentQuery);
        //echo $schoolMajorStudentQuery->createCommand()->getRawSql();die;
        $data['schoolMajorStudent'] = $schoolMajorStudentQuery->all();
        $result['students'] = Yii::$app->view->render('@app/views/job/partials/_students', $data);
        return Json::encode($result);
    }
}