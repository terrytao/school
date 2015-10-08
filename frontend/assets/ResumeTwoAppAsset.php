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
class ResumeTwoAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/resumetwo';
    public $css = [

        // This is the CSS for the returned results of the autocomplete
        'css/font-awesome.min.css"',
        'css/perfect-scrollbar-0.4.5.min.css',
        'css/magnific-popup.css',
        'css/hireme-1.0.0.css',
        'css/style.css',
        'css/styles/default.css'
    ];
    public $js = [
        // '//code.jquery.com/ui/1.11.4/jquery-ui.js',
        '//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js',
        'js/TweenMax.min.js',
        'js/jquery.touchSwipe.min.js',
        'js/jquery.carouFredSel-6.2.1-packed.js',
        'js/modernizr.custom.63321.js',
        'js/jquery.dropdownit.js',
        'js/jquery.stellar.min.js',
        'js/ScrollToPlugin.min.js',
        'js/bootstrap.min.js',
        'js/jquery.mixitup.min.js',
        'js/masonry.min.js',
        'js/perfect-scrollbar-0.4.5.with-mousewheel.min.js',
        'js/magnific-popup.js',
        'js/custom.js'

    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

