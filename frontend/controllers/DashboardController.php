<?php
namespace frontend\controllers;


use frontend\models\SchoolDistribution;

use newerton\jcrop\jCrop;
use PDO;
use PHPImageWorkshop\ImageWorkshop;
use Yii;
use frontend\components\Controller;
use frontend\models\StudentCreateProfileForm;
use yii\db\Query;
use yii\helpers\Json;


class DashboardController extends Controller
{

    public function actionIndex()
    {
//
//
//        $db = Yii::$app->db;
//
//        foreach ($db->getSchema()->tableNames as $tableName) {
//
//
//            $cols = $db->createCommand("SHOW COLUMNS FROM " . $tableName)->queryAll(PDO::FETCH_OBJ);
//            foreach ($cols as $col) {
//                $col->Field;
//
//                $db->createCommand("ALTER TABLE " . $tableName . " MODIFY " . $col->Field . " " . $col->Type . " CHARACTER SET utf8 COLLATE utf8_unicode_ci;");
//            }
//
//            echo $db->createCommand('ALTER TABLE ' . $tableName . ' CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci')->execute();
//
//
//        }
//        die;

        $schoolDistributions = SchoolDistribution::find()->distinct()->orderBy('percentage DESC')->groupBy('school_province')->limit(10)->all();

        $schoolDistributionArr = [];
        foreach ($schoolDistributions as $schoolDistribution) {
            $color = dechex(rand(0x000000, 0xFFFFFF));;

            $schoolDistributionArr[] = [
                $schoolDistribution->school_province,
                $schoolDistribution->percentage * 100];

        }

        $data['schoolDistribution'] = Json::encode($schoolDistributionArr);
//die;
        return $this->render('index', $data);
    }


}