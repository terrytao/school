<?php
use yii\helpers\Html;

?>


<!-- #section:basics/content.breadcrumbs -->
<div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
        try {
            ace.settings.check('breadcrumbs', 'fixed')
        } catch (e) {
        }
    </script>

    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">Home</a>
        </li>

        <li>
            <a href="#">UI &amp; Elements</a>
        </li>
        <li class="active">Treeview</li>
    </ul>
    <!-- /.breadcrumb -->

    <!-- #section:basics/content.searchbox -->
    <div class="nav-search" id="nav-search">
        <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input"
                                           id="nav-search-input" autocomplete="off"/>
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
        </form>
    </div>
    <!-- /.nav-search -->

    <!-- /section:basics/content.searchbox -->
</div>

<!-- /section:basics/content.breadcrumbs -->
<div class="page-content">

    <!-- /section:settings.box -->
    <div class="page-header">
        <h1>
            <?= $session['type']; ?>
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                with selectable items(single &amp; multiple) and custom icons
            </small>
        </h1>
    </div>
    <!-- /.page-header -->


    <? if ($session['type'] == 'publishToStudents') { ?>
        <div class="row">
            <div class="col-md-12">

                <!-- Publish to schools -->
                <table class="table">
                    <tr>
                        <td>Jobs:</td>
                        <td>
                            <? foreach ($jobs as $jobKey => $job) { ?>
                                <?= $job->job_id; ?>,
                            <? } ?>
                        </td>
                    </tr>

                </table>
                <!-- /Publish to schools -->

            </div>
        </div>
    <? } ?>
    <!-- Publish to schools -->
    <table class="table">
        <tr>
            <td>Jobs:</td>
            <td>
                <? foreach ($jobs as $jobKey => $job) {
                    ?>
                    <?= $job->job_id; ?>,
                <? } ?>
            </td>
        </tr>

        <tr>

            <td>Schools:</td>


            <td>
                <? foreach ($schools as $schoolKey => $school) {
                    ?>
                    <?= $school->school_name;
                    ?>,
                <? } ?>
            </td>
        </tr>
        <tr>

            <td>Majors:</td>


            <td>

                <? foreach ($majors as $majorKey => $major) { ?>
                    <?= $major->major_name; ?>,
                <? } ?>
            </td>
        </tr>

    </table>
    <!-- /Publish to schools -->


    <div class="row">
        <div class="col-md-12">
            <!-- PAGE CONTENT BEGINS -->
            <!-- #section:plugins/fuelux.treeview -->
            <div class="row">


                <div class="col-md-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="col-md-12">
                            <? //= $this->render('preview/_schools', ['session' => $session, 'schools' => $schools]); ?>
                        </div>
                        <!-- /.span -->
                    </div>
                    <!-- /.row -->

                    <div class="hr hr-18 dotted hr-double"></div>


                </div>
                <!-- /.col -->


                <? if ($session['type'] == 'publishToStudents') { ?>

                    <div class="col-md-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-md-12">
                                <?= $this->render('preview/_students', ['session' => $session, 'students' => $students]); ?>
                            </div>
                            <!-- /.span -->
                        </div>
                        <!-- /.row -->

                        <div class="hr hr-18 dotted hr-double"></div>

                    </div>

                <? } elseif ($session['type'] == 'publishToSchools') { ?>

                <!--
                                    <div class="col-md-12">
                                        <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-md-12">
                        <? /*= $this->render('preview/_schools', ['session' => $session, 'schools' => $schools]); */ ?>
                    </div>
                    <!-- /.span -->
                </div>
                <!-- /.row -->

                <div class="hr hr-18 dotted hr-double"></div>

            </div>

            <? } ?>

            <!-- /.col -->
        </div>
    </div>


    <!-- PAGE CONTENT ENDS -->
</div>
<!-- /.col -->
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <!-- #section:plugins/fuelux.treeview -->
        <div class="row">


            <div class="col-sm-12">
                <div class="widget-box widget-color-blue2">

                    <div class="widget-body">
                        <div class="widget-main padding-8">
                            <div class="control-group">



                                <?= Html::a('Confirm Posting', ['post-jobs-live'], ['class' => 'btn btn-primary']); ?>

                                <?= Html::a('Go Back (preview page, all the tables above
                                    don\'t have checkboxes or action buttons)', ['publish-now'], ['class' => 'btn btn-danger']); ?>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- PAGE CONTENT ENDS -->
</div>
<!-- /.col -->


<!-- PAGE CONTENT ENDS -->
</div>
<!-- /.col -->


