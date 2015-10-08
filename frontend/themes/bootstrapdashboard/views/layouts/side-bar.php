<?
use yii\helpers\Html;

?>
<ul class="nav sidebar-menu">

    <? if (Yii::$app->session->get('studentId')) { ?>
        <!--Dashboard-->
        <li class="active">

            <i class="menu-icon glyphicon glyphicon-home"></i>
            <span class="menu-text"> Dashboard </span><?

            // $this->params['layoutStudentName'] ?>

        </li>
        <!--Databoxes-->

        <li>

            <?= Html::a('<i class="menu-icon glyphicon glyphicon-user"></i>
            <span class="menu-text">My Profile</span>', ['/profile']); ?>
        </li>
        <!--Widgets-->

        <li>

            <?= Html::a('<i class="menu-icon glyphicon glyphicon-tasks"></i>
            <span class="menu-text">My Resume</span>', ['/resume/my-resume']); ?>
        </li>
        <!--Widgets-->
        <li>

            <?= Html::a('  <i class="menu-icon fa fa-th"></i>
            <span class="menu-text"> Jobs Posted to My Major </span>', ['/resume']); ?>
        </li>
        <!--UI Elements-->
        <li>

            <?= Html::a('  <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text"> Invitation Sent to me </span>
            <i class="menu-expand"></i>', ['/resume']); ?>
        </li>


    <? } ?>

</ul>