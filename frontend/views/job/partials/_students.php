<?php
use yii\helpers\Html;

?>

<div class="">
    <!-- PAGE CONTENT BEGINS -->
    <div class="row">


        <div class="pull-left">

            <?= Html::beginForm(); ?>

            <?= Html::submitButton('Send Interview Invitation to students', [
                'class' => 'btn   btn-success',
                'id' => 'publishToStudentsBtn'
            ]) ?>
            <?= Html::hiddenInput('filterType', 'publishToStudents'); ?>
            <?= Html::endForm(); ?>
        </div>
        <div class="clearfix"></div>
        <div class="">
            <table id="simple-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th class="center">
                        <label class="pos-rel">
                            <input type="checkbox" class="ace" id="selectAllStudents">
                            <span class="lbl"></span>
                        </label>
                    </th>
                    <th>Student <span class="badge badge-danger"><?= count($schoolMajorStudent); ?></span></th>
                    <th>Major</th>
                    <th>Student</th>
                    <th class="hidden-480">Sex</th>

                    <th>
                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                        Finish Year
                    </th>

                    </th>
                    <th>
                </tr>
                </thead>

                <tbody>
                <? foreach ($schoolMajorStudent as $schoolMajorStudent) { ?>
                    <tr>
                        <td class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="selectStudentToPostJob"
                                       value="<?= $schoolMajorStudent->student_id; ?>">
                                <span class="lbl"></span>
                            </label>
                        </td>

                        <td>
                            <a href="#"><?= @$schoolMajorStudent->school->school_name; ?></a>
                        </td>
                        <td><?= @$schoolMajorStudent->major->major_name; ?></td>
                        <td class="hidden-480"><?= @$schoolMajorStudent->student->student_name; ?></td>
                        <td><?= @$schoolMajorStudent->student->gender; ?></td>


                        <td><?= @$schoolMajorStudent->student->finish_year; ?></td>


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
                                    <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown"
                                            data-position="auto">
                                        <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                        <li>
                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
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
                <? } ?>


                </tbody>
            </table>
        </div>
        <!-- /.span -->
    </div>
    <div class="clearfix"></div>
    <!-- /.row -->
    <div class="pull-left">

        <?= Html::beginForm(); ?>

        <?= Html::submitButton('Send Interview Invitation to students', [
            'class' => 'btn   btn-success',
            'id' => 'publishToStudentsBtn'
        ]) ?>
        <?= Html::hiddenInput('filterType', 'publishToStudents'); ?>
        <?= Html::endForm(); ?>
    </div>

    <div class="hr hr-18 dotted hr-double"></div>


</div>