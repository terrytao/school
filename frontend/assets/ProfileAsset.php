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
class ProfileAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/profile';
    public $css = [
        "assets/css/ace.css",
        "assets/css/ace-fonts.css",
        "assets/css/ace-ie.css",
        "assets/css/ace-skins.css",
        // "assets/css/ace.css",
        "assets/css/bootstrap-datetimepicker.css",
        "assets/css/bootstrap-duallistbox.css",
        "assets/css/bootstrap-editable.css",
        "assets/css/bootstrap-multiselect.css",
        "assets/css/bootstrap-timepicker.css",
        "assets/css/bootstrap.css",
        "assets/css/chosen.css",
        "assets/css/colorbox.css",
        "assets/css/colorpicker.css",
        "assets/css/datepicker.css",
        "assets/css/daterangepicker.css",
        "assets/css/dropzone.css",
        "assets/css/fullcalendar.css",
        "assets/css/jquery-ui.custom.css",
        "assets/css/jquery-ui.css",
        "assets/css/pace.css",
        "assets/css/prettify.css",
        "assets/css/select2.css",
        "assets/css/ui.jqgrid.css",
        "assets/css/dropzone.css",

        "assets/css/font-awesome.css",
        "assets/css/jquery-ui.custom.css",
        "assets/css/jquery.gritter.css",
        "assets/css/select2.css",
        "assets/css/datepicker.css",
        "assets/css/bootstrap-editable.css",
        "assets/css/ace-fonts.css",
        "assets/css/ace.css",
        "assets/css/bootstrap.css",
        "assets/css/ace-part2.css",
        "assets/css/ace-ie.css",
        "assets/js/jcrop/jquery.Jcrop.min.css",
        "assets/js/easy-tree/skin-win8/ui.easytree.css"
    ];
    public $js = [
        "assets/js/jquery.js",
        "assets/js/jquery1x.js",
        "assets/js/bootstrap.js",
        "assets/js/ace-extra.js",
        "assets/js/excanvas.js",

        "assets/js/jquery-ui.custom.js",
        "assets/js/jquery.ui.touch-punch.js",
        "assets/js/jquery.gritter.js",
        "assets/js/bootbox.js",
        "assets/js/jquery.easypiechart.js",
        "assets/js/date-time/bootstrap-datepicker.js",
        "assets/js/jquery.hotkeys.js",
        "assets/js/easy-tree/jquery.easytree.js",
        "assets/js/bootstrap-wysiwyg.js",
        "assets/js/select2.js",
        "assets/js/fuelux/fuelux.spinner.js",
        "assets/js/fuelux/fuelux.tree.js",
        //"assets/wizard.js",
        "assets/js/x-editable/bootstrap-editable.js",
        "assets/js/x-editable/ace-editable.js",
        "assets/js/jquery.maskedinput.js",
        "assets/js/flot/jquery.flot.js",
        "assets/js/flot/jquery.flot.resize.js",
        "assets/js/flot/jquery.flot.pie.js",
        "assets/js/ace/elements.scroller.js",
        "assets/js/ace/elements.colorpicker.js",
        "assets/js/ace/elements.fileinput.js",
        "assets/js/ace/elements.typeahead.js",
        "assets/js/ace/elements.wysiwyg.js",
        "assets/js/ace/elements.spinner.js",
        "assets/js/ace/elements.treeview.js",
        "assets/js/ace/elements.wizard.js",
        "assets/js/ace/elements.aside.js",
        "assets/js/ace/ace.js",
        "assets/js/ace/ace.ajax-content.js",
        "assets/js/ace/ace.touch-drag.js",
        "assets/js/ace/ace.sidebar.js",
        "assets/js/ace/ace.sidebar-scroll-1.js",
        "assets/js/ace/ace.submenu-hover.js",
        "assets/js/ace/ace.widget-box.js",
        "assets/js/ace/ace.settings.js",
        "assets/js/ace/ace.settings-rtl.js",
        "assets/js/ace/ace.settings-skin.js",
        "assets/js/ace/ace.widget-on-reload.js",
        "assets/js/ace/ace.searchbox-autocomplete.js",
        "assets/js/ace-extra.js",
        "assets/js/html5shiv.js",
        "assets/js/respond.js",
        "assets/js/jcrop/jquery.Jcrop.min.js",
        "assets/js/highcharts/highcharts.js",
        "assets/js/highcharts/highcharts-3d.js",
        "assets/js/highcharts/modules/exporting.js",
        "assets/js/highcharts/customEvents.js",

        "assets/js/major-common.js"
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'frontend\assets\FineUploaderAsset',
    ];
}


?>


