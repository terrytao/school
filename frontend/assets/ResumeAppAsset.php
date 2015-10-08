<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ResumeAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/resume';
    public $css = [

        // This is the CSS for the returned results of the autocomplete
        'http://fonts.googleapis.com/css?family=Raleway:600,900',
        'http://fonts.googleapis.com/css?family=Lora&subset=latin,cyrillic,latin-ext',
        'http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700,700italic&subset=latin,latin-ext',
        'css/hireme-1.0.0.css'
    ];
    public $js = [
       // '//code.jquery.com/ui/1.11.4/jquery-ui.js',
        '//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js',
        'js/vendor/modernizr.custom.js',
        'js/hireme-1.0.0.js'

    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
