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
class BootstrapDashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/bootstrapdashboard';
    public $css = [

        // This is the CSS for the returned results of the autocomplete
        'assets/css/font-awesome.min.css',
        'assets/css/weather-icons.min.css',
        'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300',
        'http://fonts.googleapis.com/css?family=Roboto:400,300',
        'assets/css/beyond.min.css',
        'assets/css/demo.min.css',
        'assets/css/typicons.min.css',

        'assets/css/animate.min.css'
    ];
    public $js = [
        // '//code.jquery.com/ui/1.11.4/jquery-ui.js',
        '//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js',
        'assets/js/skins.min.js',
        'assets/js/slimscroll/jquery.slimscroll.min.js',
        'assets/js/beyond.js',
//        'assets/js/charts/sparkline/jquery.sparkline.js',
//        'assets/js/charts/sparkline/sparkline-init.js',
//        'assets/js/charts/easypiechart/jquery.easypiechart.js',
//        'assets/js/charts/easypiechart/easypiechart-init.js',
//        'assets/js/charts/flot/jquery.flot.js',
//        'assets/js/charts/flot/jquery.flot.resize.js',
//        'assets/js/charts/flot/jquery.flot.pie.js',
//        'assets/js/charts/flot/jquery.flot.tooltip.js',
//        'assets/js/charts/flot/jquery.flot.orderBars.js',


    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

?>
