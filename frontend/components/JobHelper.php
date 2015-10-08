<?
namespace frontend\components;

use frontend\models\Province;
use frontend\models\School;
use frontend\models\SchoolMajor;
use Yii;
use yii\data\Pagination;
use yii\helpers\BaseInflector;
use yii\helpers\Json;
use yii\web\Request;

class JobHelper
{
    protected $jobSession;

    public function __construct()
    {
        $session = Yii::$app->session->get('createJob');
        $this->jobSession = $session;
    }

//
//    public function emailEmployerNewApplicant()
//    {
//        Yii::$app->mailer->compose('contact/html', ['contactForm' => $form])
//            ->setFrom('from@domain.com')
//            ->setTo($form->email)
//            ->setSubject($form->subject)
//            ->send();
//    }

}