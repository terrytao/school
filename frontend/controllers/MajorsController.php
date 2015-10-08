<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/2/15
 * Time: 6:14 AM
 */

namespace frontend\controllers;
use common\models\Major;
use common\models\SchoolMajor;
use Yii;
use yii\helpers\Json;
use frontend\components\Controller;

class MajorsController extends Controller{

    public function actionAjaxFindMajors()
    {
        if(Yii::$app->request->getIsAjax()){

            $majors = Major::find()->filterWhere(['like', 'major_name', $_GET['term']])->all();

            $majorsArr = ['id'=>'', 'value'=>''];
            foreach ($majors as $major){
                $majorsArr[] = [
                    'id' => $major->major_id,
                    'value' => $major->major_name
            ];

            }
            return Json::encode($majorsArr);

        }
    }



}