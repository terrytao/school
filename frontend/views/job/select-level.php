<?php
/**
 *
 */
use frontend\models\SchoolMajor;
use yii\helpers\Html;
use yii\helpers\Json;

?>

<?
$degreeLevels = ['diploma', 'bachelor', 'master', 'phd'];

foreach (SchoolMajor::$levels as $degreeName => $degreeValue) {
    ?>
    <?= Html::beginForm(); ?>
    <p><?= Html::submitButton($degreeName, ['class' => 'btn   btn-primary']) ?></p>
    <?= Html::hiddenInput('degreeLevel', $degreeValue); ?>
    <?= Html::endForm(); ?>

    <?
}

?>
<div class="page-header">
    <h1>
        Treeview
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            with selectable items(single &amp; multiple) and custom icons
        </small>
    </h1>
</div>
<?= $this->render('partials/selected-data');
?>


<div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <!-- #section:plugins/fuelux.treeview -->
    <div class="row">


        <div class="col-sm-12">
            <div class="widget-box widget-color-blue2">

                <div class="widget-body">
                    <div class="widget-main padding-8">


                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <?= Html::beginForm(); ?>
                                    <?= Html::submitButton('Chose a major, publish to schools', ['class' => 'btn   btn-primary']) ?>
                                    <?= Html::hiddenInput('filterType', 'publishToSchools'); ?>
                                    <?= Html::endForm(); ?></div>


                                <div class="pull-left">

                                    <?= Html::beginForm(); ?>

                                    <?= Html::submitButton('Chose a major, publish to students', ['class' => 'btn   btn-success']) ?>
                                    <?= Html::hiddenInput('filterType', 'publishToStudents'); ?>
                                    <?= Html::endForm(); ?>
                                </div>
                            </div>
                        </div>
                        <div id="schoolContainer">schoolList</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <!-- #section:plugins/fuelux.treeview -->
        <div class="row">
            <div class="col-sm-3">
                <div class="widget-box widget-color-red">
                    <div class="widget-header">
                        <h4 class="widget-title lighter smaller">Degree level</h4>
                    </div>
                    <div class="widget-body">
                        <div class="widget-main padding-8">
                            <div class="control-group">

                                <button class="btn btn-primary">本科</button>

                                <button class="btn btn-success">专科</button>

                                <button class="btn btn-warning">Master</button>


                            </div>
                        </div>
                        <div class="widget-main padding-8">
                            <div id="courseTreeContainer">
                                <ul id="courseTree"></ul>
                                <?= $this->render('@app/views/job/trees/_bachelor-tree'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-3">
                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-xs-">
                        <table id="simple-table" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace"/>
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th>School</th>
                                <th>Province</th>
                                <th class="hidden-480">City</th>


                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace"/>
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">ace.com</a>
                                </td>
                                <td>$45</td>
                                <td class="hidden-480">3,330</td>

                            </tr>

                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace"/>
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">base.com</a>
                                </td>
                                <td>$35</td>
                                <td class="hidden-480">2,595</td>

                            </tr>

                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace"/>
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">max.com</a>
                                </td>
                                <td>$60</td>
                                <td class="hidden-480">4,400</td>

                            </tr>

                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace"/>
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">best.com</a>
                                </td>
                                <td>$75</td>
                                <td class="hidden-480">6,500</td>

                            </tr>

                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace"/>
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">pro.com</a>
                                </td>
                                <td>$55</td>
                                <td class="hidden-480">4,250</td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.span -->
                </div>
                <!-- /.row -->

                <div class="hr hr-18 dotted hr-double"></div>


            </div>
            <!-- /.col -->

            <div class="col-xs-6">
                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-xs-">
                        <table id="simple-table" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace"/>
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th>School</th>
                                <th>Major</th>
                                <th>Student</th>
                                <th class="hidden-480">Clicks</th>

                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    Update
                                </th>
                                <th class="hidden-480">Status</th>

                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace"/>
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">ace.com</a>
                                </td>
                                <td>$45</td>
                                <td class="hidden-480">3,330</td>
                                <td>Feb 12</td>

                                <td class="hidden-480">
                                    <span class="label label-sm label-warning">Expiring</span>
                                </td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <button class="btn btn-xs btn-success">
                                            <i class="ace-icon fa fa-save bigger-120"></i>
                                        </button>


                                        <button class="btn btn-xs btn-warning">
                                            <i class="ace-icon fa fa-flag bigger-120"></i>
                                        </button>
                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip"
                                                       title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip"
                                                       title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip"
                                                       title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace"/>
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">base.com</a>
                                </td>
                                <td>$35</td>
                                <td class="hidden-480">2,595</td>
                                <td>Feb 18</td>

                                <td class="hidden-480">
                                    <span class="label label-sm label-success">Registered</span>
                                </td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <button class="btn btn-xs btn-success">
                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-info">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                        </button>


                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip"
                                                       title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip"
                                                       title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip"
                                                       title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace"/>
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">max.com</a>
                                </td>
                                <td>$60</td>
                                <td class="hidden-480">4,400</td>
                                <td>Mar 11</td>

                                <td class="hidden-480">
                                    <span class="label label-sm label-warning">Expiring</span>
                                </td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <button class="btn btn-xs btn-success">
                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-info">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                        </button>


                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip"
                                                       title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip"
                                                       title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip"
                                                       title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace"/>
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">best.com</a>
                                </td>
                                <td>$75</td>
                                <td class="hidden-480">6,500</td>
                                <td>Apr 03</td>

                                <td class="hidden-480">
                                    <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                </td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <button class="btn btn-xs btn-success">
                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-info">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                        </button>


                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip"
                                                       title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip"
                                                       title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip"
                                                       title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="center">
                                    <label class="pos-rel">
                                        <input type="checkbox" class="ace"/>
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">pro.com</a>
                                </td>
                                <td>$55</td>
                                <td class="hidden-480">4,250</td>
                                <td>Jan 21</td>

                                <td class="hidden-480">
                                    <span class="label label-sm label-success">Registered</span>
                                </td>

                                <td>
                                    <div class="hidden-sm hidden-xs btn-group">
                                        <button class="btn btn-xs btn-success">
                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                        </button>

                                        <button class="btn btn-xs btn-info">
                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                        </button>

                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip"
                                                       title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip"
                                                       title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip"
                                                       title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.span -->
                </div>
                <!-- /.row -->

                <div class="hr hr-18 dotted hr-double"></div>


            </div>
            <!-- /.col -->
        </div>
    </div>


    <!-- PAGE CONTENT ENDS -->
</div>

