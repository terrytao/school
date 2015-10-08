<?php
use yii\helpers\Html;

?>


<!-- #section:basics/navbar.layout -->
<div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="navbar-container" id="navbar-container">
        <!-- #section:basics/sidebar.mobile.toggle -->
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <!-- /section:basics/sidebar.mobile.toggle -->
        <div class="navbar-header pull-left">
            <!-- #section:basics/navbar.layout.brand -->
            <a href="#" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    Ace Admin
                </small>
            </a>

            <!-- /section:basics/navbar.layout.brand -->

            <!-- #section:basics/navbar.toggle -->

            <!-- /section:basics/navbar.toggle -->
        </div>

        <!-- #section:basics/navbar.dropdown -->
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="grey">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-tasks"></i>
                        <span class="badge badge-grey">4</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-check"></i>
                            4 Tasks to complete
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar">
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Software Update</span>
                                            <span class="pull-right">65%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:65%" class="progress-bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Hardware Upgrade</span>
                                            <span class="pull-right">35%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Unit Testing</span>
                                            <span class="pull-right">15%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Bug Fixes</span>
                                            <span class="pull-right">90%</span>
                                        </div>

                                        <div class="progress progress-mini progress-striped active">
                                            <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">
                                See tasks with details
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-exclamation-triangle"></i>
                            8 Notifications
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
                                            <span class="pull-right badge badge-info">+12</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="btn btn-xs btn-primary fa fa-user"></i>
                                        Bob just signed up as an editor ...
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
                                            <span class="pull-right badge badge-success">+8</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
                                            <span class="pull-right badge badge-info">+11</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">
                                See all notifications
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="green">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-envelope-o"></i>
                            5 Messages
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar">
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="../assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar"/>
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="../assets/avatars/avatar3.png" class="msg-photo"
                                             alt="Susan's Avatar"/>
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="../assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar"/>
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="../assets/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar"/>
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="../assets/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar"/>
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="inbox.html">
                                See all messages
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- #section:basics/navbar.user_menu -->
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="../assets/avatars/user.jpg" alt="Jason's Photo"/>
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="profile.html">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- /section:basics/navbar.user_menu -->
            </ul>
        </div>

        <!-- /section:basics/navbar.dropdown -->
    </div>
    <!-- /.navbar-container -->
</div>

<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>


    <!-- /section:basics/sidebar -->
    <div class="main-content">
        <div class="main-content-inner">
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
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <!-- #section:plugins/fuelux.treeview -->
                        <div class="row">


                            <div class="col-sm-12">
                                <div class="widget-box widget-color-blue2">

                                    <div class="widget-body">
                                        <div class="widget-main padding-8">
                                            <div class="control-group">


                                                <button class="btn btn-primary">Post Jobs to Schools</button>

                                                <button class="btn btn-success">Post Jobs to Students</button>


                                            </div>
                                            <div id="schoolContainer">schoolList</div>

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
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <!-- #section:plugins/fuelux.treeview -->
                    <div class="row">


                        <div class="col-sm-12">
                            <div class="widget-box widget-color-blue2">
                                <div class="widget-header">
                                    <h4 class="widget-title lighter smaller">Region</h4>
                                </div>
                                <div class="widget-body">
                                    <div class="control-group">


                                        <div class="checkbox">
                                            <label class=>
                                                <input name="form-field-checkbox" type="checkbox" class="ace input-lg"/>
                                                <span class="lbl bigger-120"> 985</span>
                                            </label>

                                            <label class=>
                                                <input name="form-field-checkbox" type="checkbox" class="ace input-lg"/>
                                                <span class="lbl bigger-120"> 211</span>
                                            </label>

                                            <label class=>
                                                <input name="form-field-checkbox" type="checkbox" class="ace input-lg"/>
                                                <span class="lbl bigger-120"> 普通院校</span>
                                            </label>
                                            <label class=>
                                                <input name="form-field-checkbox" type="checkbox" class="ace input-lg"/>
                                                <span class="lbl bigger-120"> 高职高专</span>
                                            </label>
                                        </div>


                                    </div>
                                    <div class="widget-main padding-8">
                                        <div class="control-group">


                                            <div class="radio">
                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> San Diego</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> 北京</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl">上海</span>
                                                </label>

                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> San Diego</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> 北京</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl">上海</span>
                                                </label>

                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> San Diego</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> 北京</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl">上海</span>
                                                </label>
                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> San Diego</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> 北京</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl">上海</span>
                                                </label>

                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> San Diego</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> 北京</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl">上海</span>
                                                </label>
                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> San Diego</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> 北京</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl">上海</span>
                                                </label>
                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> San Diego</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> 北京</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl">上海</span>
                                                </label>

                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> San Diego</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> 北京</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl">上海</span>
                                                </label>

                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> San Diego</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> 北京</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl">上海</span>
                                                </label>

                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> San Diego</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> 北京</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl">上海</span>
                                                </label>
                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> San Diego</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl"> 北京</span>
                                                </label>


                                                <label>
                                                    <input name="form-field-radio" type="radio" class="ace"/>
                                                    <span class="lbl">上海</span>
                                                </label>
                                            </div>


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
                                        <ul id="tree1"></ul>
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
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.page-content -->
</div>
</div><!-- /.main-content -->
<div id="schoolContainers">schoolList</div>
<?= Html::a('show schools', (['/publish-to-schools/about']), ['class' => 'btn btn-success']) ?>
<div class="footer">
    <div class="footer-inner">
        <!-- #section:basics/footer -->
        <div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
						</span>

            &nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

							<a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

							<a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
						</span>
        </div>

        <!-- /section:basics/footer -->
    </div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    // window.jQuery || document.write("<script src='../assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
<!--		<script type="text/javascript">-->
<!--			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");-->
<!--		</script>-->
<!--		<script src="../assets/js/bootstrap.js"></script>-->
<!---->
<!--		<!-- page specific plugin scripts -->-->
<!--		<script src="../assets/js/fuelux/fuelux.tree.js"></script>-->
<!---->
<!--		<!-- ace scripts -->-->
<!--		<script src="../assets/js/ace/elements.scroller.js"></script>-->
<!--		<script src="../assets/js/ace/elements.colorpicker.js"></script>-->
<!--		<script src="../assets/js/ace/elements.fileinput.js"></script>-->
<!--		<script src="../assets/js/ace/elements.typeahead.js"></script>-->
<!--		<script src="../assets/js/ace/elements.wysiwyg.js"></script>-->
<!--		<script src="../assets/js/ace/elements.spinner.js"></script>-->
<!--		<script src="../assets/js/ace/elements.treeview.js"></script>-->
<!--		<script src="../assets/js/ace/elements.wizard.js"></script>-->
<!--		<script src="../assets/js/ace/elements.aside.js"></script>-->
<!--		<script src="../assets/js/ace/ace.js"></script>-->
<!--		<script src="../assets/js/ace/ace.ajax-content.js"></script>-->
<!--		<script src="../assets/js/ace/ace.touch-drag.js"></script>-->
<!--		<script src="../assets/js/ace/ace.sidebar.js"></script>-->
<!--		<script src="../assets/js/ace/ace.sidebar-scroll-1.js"></script>-->
<!--		<script src="../assets/js/ace/ace.submenu-hover.js"></script>-->
<!--		<script src="../assets/js/ace/ace.widget-box.js"></script>-->
<!--		<script src="../assets/js/ace/ace.settings.js"></script>-->
<!--		<script src="../assets/js/ace/ace.settings-rtl.js"></script>-->
<!--		<script src="../assets/js/ace/ace.settings-skin.js"></script>-->
<!--		<script src="../assets/js/ace/ace.widget-on-reload.js"></script>-->
<!--		<script src="../assets/js/ace/ace.searchbox-autocomplete.js"></script>-->

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function ($) {
        var sampleData = initiateDemoData();//see below


        $('#tree1').ace_tree({
            dataSource: sampleData['dataSource1'],
            multiSelect: true,
            cacheItems: true,
            'open-icon': 'ace-icon tree-minus',
            'close-icon': 'ace-icon tree-plus',
            'selectable': true,
            'selected-icon': 'ace-icon fa fa-check',
            'unselected-icon': 'ace-icon fa fa-times',
            loadingHTML: '<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>'
        });

        $('#tree2').ace_tree({
            dataSource: sampleData['dataSource2'],
            loadingHTML: '<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>',
            'open-icon': 'ace-icon fa fa-folder-open',
            'close-icon': 'ace-icon fa fa-folder',
            'selectable': false,
            multiSelect: false,
            'selected-icon': null,
            'unselected-icon': null
        });


        //please refer to docs for more info
        $('#tree1')
            .on('loaded.fu.tree', function (e) {
                // alert ("load");
            })
            .on('updated.fu.tree', function (e, result) {
            })

            .on('selected.fu.tree', function (e) {
                //  $('#schoolContainer').html("hi");
                var i;
                var majors = "";

                var items = $('#tree1').tree('selectedItems');

                for (i = 0; i < items.length; i++) {
                    majors += items[i].text + ",";


                }

                //  alert(majors);
                var postData = {majorId: 2116};

//            $.post('/job/test-select-major', postData, function (data) {
//
//                  $('#schooContainer').html("hi");
//            }, 'json')

                $.post('/publish-to-schools/get-school-by-major-id', function (data) {
                    $('#schoolContainer').html(data);

                }, 'json');


            })
            .on('deselected.fu.tree', function (e) {
                var i;
                var majors = "";

                var items = $('#tree1').tree('selectedItems');

                for (i = 0; i < items.length; i++) {
                    majors += items[i].text + ",";


                }

                //  alert(majors);
            })
            .on('opened.fu.tree', function (e) {
                //  alert ('open');
            })
            .on('closed.fu.tree', function (e) {
                //  alert ('closed');
            });


        function initiateDemoData() {
            var tree_data = {
                'science': {text: '理学', type: 'folder'},
                'vehicles': {text: '工学', type: 'folder'},
                'rentals': {text: '工学2', type: 'folder'},
                'real-estate': {text: '农学', type: 'folder'},
                'a': {text: '医学', type: 'folder'},
                'b': {text: '经济学', type: 'folder'},
                'c': {text: '管理学', type: 'folder'},
                'd': {text: '文学', type: 'folder'},
                'e': {text: '艺术学', type: 'folder'},
                'f': {text: '教育学', type: 'folder'},
                'g': {text: '法学', type: 'folder'},
                'h': {text: '哲学', type: 'folder'},
                'i': {text: '经济学', type: 'folder'},
                'j': {text: '管理学', type: 'folder'},
                'k': {text: '文学', type: 'folder'},
                'l': {text: '艺术学', type: 'folder'},
                'm': {text: '教育学', type: 'folder'},
                'n': {text: '法学', type: 'folder'},
                'o': {text: '哲学', type: 'folder'},

                'pets': {text: 'Pets', type: 'folder'},
                'tickets': {text: 'Tickets', type: 'item'},
                'services': {text: 'Services', type: 'item'},
                'personals': {text: 'Personals', type: 'item'}
            }
            tree_data['science']['additionalParameters'] = {
                'children': {
                    'math': {text: '数学类', type: 'folder'},
                    'arts-crafts': {text: '物理学类', type: 'item'},
                    'clothing': {text: '化学类', type: 'item'},
                    'computers': {text: 'Computers', type: 'item'},
                    'jewelry': {text: 'Jewelry', type: 'item'},
                    'office-business': {text: 'Office & Business', type: 'item'},
                    'sports-fitness': {text: 'Sports & Fitness', type: 'item'}
                }
            }
            tree_data['vehicles']['additionalParameters'] = {
                'children': {
                    'cars': {text: 'Cars', type: 'folder'},
                    'motorcycles': {text: 'Motorcycles', type: 'item'},
                    'boats': {text: 'Boats', type: 'item'}
                }
            }
            tree_data['science']['additionalParameters']['children']['math']['additionalParameters'] = {
                'children': {
                    'apply-math': {text: '数学与应用数学', type: 'item'},
                    'convertibles': {text: 'Convertibles', type: 'item'},
                    'coupes': {text: 'Coupes', type: 'item'},
                    'hatchbacks': {text: 'Hatchbacks', type: 'item'},
                    'hybrids': {text: 'Hybrids', type: 'item'},
                    'suvs': {text: 'SUVs', type: 'item'},
                    'sedans': {text: 'Sedans', type: 'item'},
                    'trucks': {text: 'Trucks', type: 'item'}
                }
            }

            tree_data['rentals']['additionalParameters'] = {
                'children': {
                    'apartments-rentals': {text: 'Apartments', type: 'item'},
                    'office-space-rentals': {text: 'Office Space', type: 'item'},
                    'vacation-rentals': {text: 'Vacation Rentals', type: 'item'}
                }
            }
            tree_data['real-estate']['additionalParameters'] = {
                'children': {
                    'apartments': {text: 'Apartments', type: 'item'},
                    'villas': {text: 'Villas', type: 'item'},
                    'plots': {text: 'Plots', type: 'item'}
                }
            }
            tree_data['pets']['additionalParameters'] = {
                'children': {
                    'cats': {text: 'Cats', type: 'item'},
                    'dogs': {text: 'Dogs', type: 'item'},
                    'horses': {text: 'Horses', type: 'item'},
                    'reptiles': {text: 'Reptiles', type: 'item'}
                }
            }

            var dataSource1 = function (options, callback) {
                var $data = null
                if (!("text" in options) && !("type" in options)) {
                    $data = tree_data;//the root tree
                    callback({data: $data});
                    return;
                }
                else if ("type" in options && options.type == "folder") {
                    if ("additionalParameters" in options && "children" in options.additionalParameters)
                        $data = options.additionalParameters.children || {};
                    else $data = {}//no data
                }

                if ($data != null)//this setTimeout is only for mimicking some random delay
                    setTimeout(function () {
                        callback({data: $data});
                    }, parseInt(Math.random() * 500) + 200);

                //we have used static data here
                //but you can retrieve your data dynamically from a server using ajax call
                //checkout examples/treeview.html and examples/treeview.js for more info
            }


            var tree_data_2 = {
                'pictures': {text: 'Pictures', type: 'folder', 'icon-class': 'red'},
                'music': {text: 'Music', type: 'folder', 'icon-class': 'orange'},
                'video': {text: 'Video', type: 'folder', 'icon-class': 'blue'},
                'documents': {text: 'Documents', type: 'folder', 'icon-class': 'green'},
                'backup': {text: 'Backup', type: 'folder'},
                'readme': {text: '<i class="ace-icon fa fa-file-text grey"></i> ReadMe.txt', type: 'item'},
                'manual': {text: '<i class="ace-icon fa fa-book blue"></i> Manual.html', type: 'item'}
            }
            tree_data_2['music']['additionalParameters'] = {
                'children': [
                    {text: '<i class="ace-icon fa fa-music blue"></i> song1.ogg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-music blue"></i> song2.ogg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-music blue"></i> song3.ogg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-music blue"></i> song4.ogg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-music blue"></i> song5.ogg', type: 'item'}
                ]
            }
            tree_data_2['video']['additionalParameters'] = {
                'children': [
                    {text: '<i class="ace-icon fa fa-film blue"></i> movie1.avi', type: 'item'},
                    {text: '<i class="ace-icon fa fa-film blue"></i> movie2.avi', type: 'item'},
                    {text: '<i class="ace-icon fa fa-film blue"></i> movie3.avi', type: 'item'},
                    {text: '<i class="ace-icon fa fa-film blue"></i> movie4.avi', type: 'item'},
                    {text: '<i class="ace-icon fa fa-film blue"></i> movie5.avi', type: 'item'}
                ]
            }
            tree_data_2['pictures']['additionalParameters'] = {
                'children': {
                    'wallpapers': {text: 'Wallpapers', type: 'folder', 'icon-class': 'pink'},
                    'camera': {text: 'Camera', type: 'folder', 'icon-class': 'pink'}
                }
            }
            tree_data_2['pictures']['additionalParameters']['children']['wallpapers']['additionalParameters'] = {
                'children': [
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper1.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper2.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper3.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper4.jpg', type: 'item'}
                ]
            }
            tree_data_2['pictures']['additionalParameters']['children']['camera']['additionalParameters'] = {
                'children': [
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> photo1.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> photo2.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> photo3.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> photo4.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> photo5.jpg', type: 'item'},
                    {text: '<i class="ace-icon fa fa-picture-o green"></i> photo6.jpg', type: 'item'}
                ]
            }


            tree_data_2['documents']['additionalParameters'] = {
                'children': [
                    {text: '<i class="ace-icon fa fa-file-text red"></i> document1.pdf', type: 'item'},
                    {text: '<i class="ace-icon fa fa-file-text grey"></i> document2.doc', type: 'item'},
                    {text: '<i class="ace-icon fa fa-file-text grey"></i> document3.doc', type: 'item'},
                    {text: '<i class="ace-icon fa fa-file-text red"></i> document4.pdf', type: 'item'},
                    {text: '<i class="ace-icon fa fa-file-text grey"></i> document5.doc', type: 'item'}
                ]
            }

            tree_data_2['backup']['additionalParameters'] = {
                'children': [
                    {text: '<i class="ace-icon fa fa-archive brown"></i> backup1.zip', type: 'item'},
                    {text: '<i class="ace-icon fa fa-archive brown"></i> backup2.zip', type: 'item'},
                    {text: '<i class="ace-icon fa fa-archive brown"></i> backup3.zip', type: 'item'},
                    {text: '<i class="ace-icon fa fa-archive brown"></i> backup4.zip', type: 'item'}
                ]
            }
            var dataSource2 = function (options, callback) {
                var $data = null
                if (!("text" in options) && !("type" in options)) {
                    $data = tree_data_2;//the root tree
                    callback({data: $data});
                    return;
                }
                else if ("type" in options && options.type == "folder") {
                    if ("additionalParameters" in options && "children" in options.additionalParameters)
                        $data = options.additionalParameters.children || {};
                    else $data = {}//no data
                }

                if ($data != null)//this setTimeout is only for mimicking some random delay
                    setTimeout(function () {
                        callback({data: $data});
                    }, parseInt(Math.random() * 500) + 200);

                //we have used static data here
                //but you can retrieve your data dynamically from a server using ajax call
                //checkout examples/treeview.html and examples/treeview.js for more info
            }


            return {'dataSource1': dataSource1, 'dataSource2': dataSource2}
        }

    });
</script>

