<?
use yii\helpers\Html; ?>
<div id="sidebar" class="sidebar                  responsive">
    <script type="text/javascript">
        try {
            ace.settings.check('sidebar', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <!-- #section:basics/sidebar.layout.shortcuts -->
            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>

            <!-- /section:basics/sidebar.layout.shortcuts -->
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div>
    <!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="">

            <?= Html::a('<i class="menu-icon fa fa-tachometer"></i><span class="menu-text"> Dashboard </span>', ['site/dashboard']); ?>
        </li>

        <li class="">

            <?= Html::a('<i class="menu-icon fa fa-desktop"></i><span class="menu-text">Profile</span>', ['/profile']); ?>

        </li>

        <li class="">
            <?= Html::a(' <i class="menu-icon fa fa-list"></i><span class="menu-text"> Resumes </span>', ['/resume/my-resume']); ?>

        </li>

        <li class="">

            <?= Html::a(' <i class="menu-icon fa fa-pencil-square-o"></i><span class="menu-text"> Jobs to  Schools </span>',
                ['/display-jobs/student-jobs-to-schools']); ?>
        </li>

        <li class="">

            <?= Html::a(' <i class="menu-icon fa fa-pencil-square-o"></i><span class="menu-text"> Jobs to Me </span>',
                ['/display-jobs/student-jobs-to-me']); ?>
        </li>
        <li class="">

            <?= Html::a(' <i class="menu-icon fa fa-pencil-square-o"></i><span class="menu-text"> Jobs Applied </span>', '#'); ?>
        </li>
        <li class="">

            <?= Html::a(' <i class="menu-icon fa fa-pencil-square-o"></i><span class="menu-text"> Saved Jobs </span>', '#'); ?>
        </li>


    </ul>
    <!-- /.nav-list -->

    <!-- #section:basics/sidebar.layout.minimize -->
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left"
           data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>

    <!-- /section:basics/sidebar.layout.minimize -->
    <script type="text/javascript">
        try {
            ace.settings.check('sidebar', 'collapsed')
        } catch (e) {
        }
    </script>
</div>