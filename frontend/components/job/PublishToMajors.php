<?php

namespace frontend\components\job;

use frontend\models\Province;
use frontend\models\School;
use frontend\models\SchoolMajor;
use Yii;
use yii\data\Pagination;
use yii\helpers\Json;
use yii\web\Request;

class PublishToMajors
{
    protected $jobSession;

    public function __construct()
    {
        $session = Yii::$app->session->get('createJob');
        $this->jobSession = $session;
    }

    public function ajaxFilterSchools(Request $request)
    {

        $provinces = Province::find()->all();

        $is211 = $request->post('is211', '');
        $is985 = $request->post('is985', '');
        $province = $request->post('province');


        //$majorId = 1178;
        $schoolQuery = School::find();


        if ($is211 || $is985 || $province) {

            if ($is211) {
                $schoolQuery->andWhere(['=', 'is_211', $is211]);
            }
            if ($is985) {
                $schoolQuery->andWhere(['=', 'is_985', $is985]);
            }
            if ($province) {
                $schoolQuery->andWhere(['=', 'school_province', $province]);
            }
        }
        $schoolCount = $schoolQuery->count();
        // create a pagination object with the total count
        //  $pagination = new Pagination(['totalCount' => $schoolCount]);


// limit the query using the pagination and retrieve the articles
        $schoolQuery->offset(0)
            ->limit(100);
        $schools = $schoolQuery->all();


        $data['pagination'] = @$pagination;
        $data['schools'] = $schools;
        $data['provinces'] = $provinces;
        $data['request'] = Yii::$app->request;

        $view = Yii::$app->view->render("@app/views/job/publish-to-majors/_select_schools", $data);

        return Json::encode($view);
    }

    public function ajaxGetSchoolMajors(Request $request)
    {
        $provinces = Province::find()->all();


        $school = School::findOne(['school_id' => $request->post('schoolId')]);

        $schoolMajorQuery = SchoolMajor::find()->with(['majors']);
        $schoolMajorQuery->where(['school_id' => $request->post('schoolId')]);

        $schoolMajorQuery->offset(0)
            ->limit(100);
        $schoolMajors = $schoolMajorQuery->all();

        $data['schoolMajors'] = $schoolMajors;
        $data['provinces'] = $provinces;
        $data['request'] = Yii::$app->request;
        $data['school'] = $school;
        $view = Yii::$app->view->render("@app/views/job/publish-to-majors/_school_majors", $data);

        return Json::encode($view);
    }
}