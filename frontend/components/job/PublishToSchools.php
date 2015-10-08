<?php

namespace frontend\components\job;

use frontend\models\Province;
use frontend\models\School;
use frontend\models\SchoolMajor;
use Yii;
use yii\data\Pagination;
use yii\helpers\Json;
use yii\web\Request;

class PublishToSchools
{
    protected $jobSession;

    public function __construct()
    {
        $session = Yii::$app->session->get('createJob');
        $this->jobSession = $session;
    }

    public function ajaxGetSchools(Request $request)
    {


        $provinces = Province::find()->all();
        $majorName = $request->post('majorName', '');
        $is211 = $request->post('is211', '');
        $is985 = $request->post('is985', '');
        $province = $request->post('province');
        $majors = $request->post('majors');

       // $majors =  $request->post('majors');
     //  print_r($majors);die;
      //  $fourYear = $request->post('fourYear');
      //  $threeYear = $request->post('threeYear');
        $allProvinces = $request->post('allProvinces');

        $schoolTypes = [];
        if (!empty($request->post('schoolTypes')))
            $schoolTypes = explode(',', $request->post('schoolTypes'));


        $schoolLevels = [];

        if (!empty($request->post('schoolLevels')))
            $schoolLevels = explode(',', $request->post('schoolLevels'));

       // print_r($schoolLevels);


        $schoolMajorsQuery = SchoolMajor::find()
            ->joinWith(['schools' => function ($query) use ($is211, $is985, $province, $schoolTypes,$schoolLevels, $allProvinces) {
                if ($province)
                    $query->where(['=', 'school_province', $province]);
                if ($is211) {
                    $query->andWhere(['=', 'is_211', $is211]);
                }
                if ($is985) {
                    $query->andWhere(['=', 'is_985', $is985]);
                }
                if (count($schoolTypes) > 0) {

                    $query->andWhere(['IN', 'school_category', $schoolTypes]);
                }
                if (count($schoolLevels) > 0) {

                    $query->andWhere(['IN', 'school_level', $schoolLevels]);
                }
                if (count($allProvinces) > 0) {
                    $query->andWhere(['IN', 'school_province', $allProvinces]);
                }

            }], true, 'INNER JOIN');


        if (count($majors) > 0)
            $schoolMajorsQuery->andWhere(['IN', 'major_id', $majors]);


        // print_r($schoolTypes); die;

        $schoolMajorsQuery->groupBy('school_id');
//        echo $schoolMajorsQuery->createCommand()->getRawSql();die;//
//        die;
        $schoolMajors = $schoolMajorsQuery->all();


        $result['filter'] = Yii::$app->view->render('@app/views/job/partials/_school-filter', ['request' => $request, 'provinces' => $provinces]);
        $result['schools'] = Yii::$app->view->render('@app/views/job/partials/_schools', [
                'provinces' => $provinces,
                'request' => $request,
                'schoolMajors' => $schoolMajors]
        );
        return Json::encode($result);
    }

    public function about()
    {
        $view = Yii::$app->view->render('@app/views/publish-to-schools/about');
        return Json::encode($view);
    }
}