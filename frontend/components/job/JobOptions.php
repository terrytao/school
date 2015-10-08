<?php

namespace frontend\components\job;

use Yii;
use yii\helpers\BaseInflector;
class JobOptions
{
    protected $jobSession;

    public function __construct()
    {
        $session = Yii::$app->session->get('createJob');
        $this->jobSession = $session;
    }

    public function selected()
    {

        foreach ($this->jobSession as $sessionKey => $session) {
            echo '<b>'.$sessionKey . '</b> - ' . $session . '<br>';
        }
    }
}
