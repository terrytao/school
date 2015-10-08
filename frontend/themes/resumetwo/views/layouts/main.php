<?php
use frontend\assets\ResumeAppAsset;
use frontend\assets\ResumeTwoAppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

ResumeTwoAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="page-index">
<?php $this->beginBody() ?>


<div id="wrapper">
    <a href="#sidebar" class="mobilemenu"><i class="icon-reorder"></i></a>

    <div id="sidebar">
        <div id="main-nav">
            <div id="nav-container">
                <div id="profile" class="clearfix">
                    <div class="portrate hidden-xs"></div>
                    <div class="title">
                        <h2><?//=$this->params['layoutStudentName']?></h2>

                        <h3>Stanford University</h3>
                    </div>

                </div>
                <ul id="navigation">
                    <li>
                        <a href="#biography">
                            <div class="icon icon-user"></div>
                            <div class="text">About Me</div>
                        </a>
                    </li>

                    <li>
                        <a href="#research">
                            <div class="icon icon-book"></div>
                            <div class="text">Research</div>
                        </a>
                    </li>

                    <li>
                        <a href="#publications">
                            <div class="icon icon-edit"></div>
                            <div class="text">Publications</div>
                        </a>
                    </li>

                    <li>
                        <a href="#teaching">
                            <div class="icon icon-time"></div>
                            <div class="text">Teaching</div>
                        </a>
                    </li>

                    <li>
                        <a href="#gallery">
                            <div class="icon icon-picture"></div>
                            <div class="text">我的作品</div>
                        </a>
                    </li>

                    <li>
                        <a href="#contact">
                            <div class="icon icon-calendar"></div>
                            <div class="text">Contact & Meet Me</div>
                        </a>
                    </li>

                    <li class="external">
                        <a href="#">
                            <div class="icon icon-download-alt"></div>
                            <div class="text">Download CV</div>
                        </a>

                    </li>
                    <li class="external">
                        <a href="#">
                            <div class="icon icon-download-alt"></div>
                            <div class="text"><?= Html::a('Go Back My Resume','/resume/my-resume',['class'=>'btn btn-danger']) ?></div>
                        </a>

                    </li>


                </ul>
            </div>
        </div>

        <div class="social-icons">
            <ul>
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
    <div id="main">
        <?
        // this loads the view file          $content
        ?>
        <?= $content; ?>

        <div id="overlay"></div>

    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


