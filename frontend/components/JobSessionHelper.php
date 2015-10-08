<?php
/**
 * Created by PhpStorm.
 * User: kdp
 * Date: 7/6/15
 * Time: 4:41 AM
 */
namespace frontend\components;

use Yii;

class JobSessionHelper
{
    private $validKeys = ['schoolIds'];

    public static function set($key, $value)
    {

        $sessionArray = Yii::$app->session->get('createJob');
        $newSessionArray = [];

        if ($key == 'publishToSchools') {
            $sessionArray['studentIds'] = null;
        }

        if (count($sessionArray) > 0) {
            foreach ($sessionArray as $sessionKey => $sessionVal) {
                $newSessionArray[$sessionKey] = $sessionVal;
            }
        }
        $newSessionArray[$key] = $value;
        // file_put_contents(dirname(__DIR__) . '/../sql.log', print_r($newSessionArray, true), FILE_APPEND);

        Yii::$app->session->set('createJob', $newSessionArray);;
        file_put_contents(dirname(__DIR__) . '/../sql.log', "NEW SESSION VALUE: " . print_r(Yii::$app->session->get('createJob'), true), FILE_APPEND);
    }
}