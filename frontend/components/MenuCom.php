<?php
namespace frontend\components;

use Yii;

class MenuCom
{
    public static function show()
    {
        return Yii::$app->view->renderFile('@app/views/layouts/menu.php');
    }

    public static function showMenuDiploma(){

        return Yii::$app->view->renderFile('@app/views/layouts/menu_diploma.php');
    }

    public static function showMenuMaster()
    {
        return Yii::$app->view->renderFile('@app/views/layouts/menu_master.php');
    }

    public static function showMenuPhd(){

        return Yii::$app->view->renderFile('@app/views/layouts/menu_phd.php');
    }


}