<?php
namespace console\controllers;

use yii\console\Controller;
use yii\helpers\Console;

class JobMajorMenuController extends Controller
{
    // The command "yii example/create test" will call "actionCreate('test')"
    public function actionIndex()
    {
        $this->stdout(getcwd(), Console::BOLD);


       // ob_start();

      $content = $this->getContent();
       // $content = ob_get_flush();
        echo $content;
        echo file_put_contents('frontend/views/generated/job-major-tree.php', $content);
    }

    private function getContent(){
        return  $this->renderPartial('generate');
    }

}