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
class JedNotKaAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/jednotka';
    public $css = [
        "assets/stylesheets/bootstrap/bootstrap.min.css",
        "assets/stylesheets/jednotka_green.css"
    ];
    public $js = [
        // '//code.jquery.com/ui/1.11.4/jquery-ui.js',
        "assets/javascripts/jquery/jquery.mobile.custom.min.js",
        "assets/javascripts/plugins/modernizr/modernizr.custom.min.js",
        "assets/javascripts/plugins/hover_dropdown/twitter-bootstrap-hover-dropdown.min.js",
        "assets/javascripts/plugins/retina/retina.min.js",
        "assets/javascripts/plugins/knob/jquery.knob.js",
        "assets/javascripts/plugins/isotope/jquery.isotope.min.js",
        "assets/javascripts/plugins/isotope/jquery.isotope.sloppy-masonry.min.js",
        "assets/javascripts/plugins/validate/jquery.validate.min.js",
        "assets/javascripts/plugins/flexslider/jquery.flexslider.min.js",
        "assets/javascripts/plugins/countdown/countdown.js",
        "assets/javascripts/plugins/nivo_lightbox/nivo-lightbox.min.js",
        "assets/javascripts/plugins/cycle/jquery.cycle.all.min.js",
        "assets/javascripts/jednotka.js"
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
