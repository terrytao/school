<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/17/15
 * Time: 10:43 PM
 */
namespace frontend\components;

use Yii;

class ThemeHelper
{
    /**
     * ->->Sets the theme for resumes, loads the resume theme
     *
     * @return object
     * @throws \yii\base\InvalidConfigException
     */
    // what does this do?, to where?
    // the action it's being called in
    //i see, what this createObject do?
    /**
     * This is a more complex subject because it is being used for dependency injection
     * Basically the yii\base\Theme.php class is being loaded from this function
     *

// so Theme is part of Yii already? a
     * n d
     *  itthe the theme loader / system
     * create object is just loading the Theme class with the class and apth map and base url
     * and it's for controller to call it?
     * and get the theme file?
     *
     * for the most part yeah
     * i see, start to understdand  but when we get teh resume done, i think i'll total undersgtand it
     */
    public static function load($themeName='resumetwo')
    {
        return Yii::createObject([
            'class' => '\yii\base\Theme',
            'pathMap' => [
                '@app/views' => [
                    '@app/themes/'.$themeName.'/views',

                ],
                '@dektrium/user/views' => '@app/views/user',
            ],
            'baseUrl' => '@web/themes/'.$themeName.'',
        ]);
    }
}