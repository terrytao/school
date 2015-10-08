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
    <!-- #section:settings.box -->
    <div class="ace-settings-container" id="ace-settings-container">
        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
            <i class="ace-icon fa fa-cog bigger-130"></i>
        </div>

        <div class="ace-settings-box clearfix" id="ace-settings-box">
            <div class="pull-left width-50">
                <!-- #section:settings.skins -->
                <div class="ace-settings-item">
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                </div>

                <!-- /section:settings.skins -->

                <!-- #section:settings.navbar -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar"/>
                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                </div>

                <!-- /section:settings.navbar -->

                <!-- #section:settings.sidebar -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar"/>
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                </div>

                <!-- /section:settings.sidebar -->

                <!-- #section:settings.breadcrumbs -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs"/>
                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                </div>

                <!-- /section:settings.breadcrumbs -->

                <!-- #section:settings.rtl -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"/>
                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                </div>

                <!-- /section:settings.rtl -->

                <!-- #section:settings.container -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container"/>
                    <label class="lbl" for="ace-settings-add-container">
                        Inside
                        <b>.container</b>
                    </label>
                </div>

                <!-- /section:settings.container -->
            </div>
            <!-- /.pull-left -->

            <div class="pull-left width-50">
                <!-- #section:basics/sidebar.options -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"/>
                    <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"/>
                    <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"/>
                    <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                </div>

                <!-- /section:basics/sidebar.options -->
            </div>
            <!-- /.pull-left -->
        </div>
        <!-- /.ace-settings-box -->
    </div>
    <!-- /.ace-settings-container -->

    <!-- /section:settings.box -->
    <div class="page-header">
        <h1>
            Treeview
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                with selectable items(single &amp; multiple) and custom icons
            </small>
        </h1>
    </div>
    <!-- /.page-header -->


    <div class="row">
        <div class="col-md-12">
            <!-- PAGE CONTENT BEGINS -->
            <!-- #section:plugins/fuelux.treeview -->
            <div class="row">
                <div class="col-md-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="col-xs-12">

                            <?= $this->render('preview/_jobs', ['session' => $session, 'jobs' => $jobs]); ?>
                        </div>
                        <!-- /.span -->
                    </div>
                    <!-- /.row -->

                    <div class="hr hr-18 dotted hr-double"></div>


                </div>
                <!-- /.col -->

                <div class="col-md-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="col-md-12">
                            <?= $this->render('preview/_majors', ['session' => $session, 'majors' => $majors]); ?>
                        </div>
                        <!-- /.span -->
                    </div>
                    <!-- /.row -->

                    <div class="hr hr-18 dotted hr-double"></div>


                </div>
                <!-- /.col -->

                <div class="col-md-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="col-md-12">
                            <?= $this->render('preview/_schools', ['session' => $session, 'schools' => $schools]); ?>
                        </div>
                        <!-- /.span -->
                    </div>
                    <!-- /.row -->

                    <div class="hr hr-18 dotted hr-double"></div>


                </div>
                <!-- /.col -->
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


                                    <button class="btn btn-primary">Confirm Posting</button>
                                    <button class="btn btn-danger">Go Back (preview page, all the tables above
                                        don't have checkboxes or action buttons)
                                    </button>


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


