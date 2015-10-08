<?php
use frontend\assets\ResumeAppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

ResumeAppAsset::register($this);
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


<div class="wrapper-content">
    <div class="homepage-bg"></div>
    <header>
        <div class="container">
            <nav class="navbar navbar-default">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#hireme-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="hireme-navigation">
                    <ul class="nav navbar-nav">
                        <li class="border-nav"></li>
                        <li class="curriculum-link">
                            <a href="curriculum.html">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32"
                                     enable-background="new 0 0 32 32" xml:space="preserve">
                                <path d="M29,0H3C1.3,0,0,1.3,0,3v26c0,1.7,1.3,3,3,3h26c1.7,0,3-1.3,3-3V3C32,1.3,30.7,0,29,0z M6,2h13v8l3-2l3,2V2
                                h3c1.1,0,2,0.9,2,2v15H6V2z M2,4c0-1.1,0.9-2,2-2v17c-0.7,0-1.4,0.1-2,0.3V4z M30,23v5c0,1-1,2-2,2c-6.1,0-24,0-24,0
                                c-1.1,0-2-0.9-2-2v-5c0-1.1,0.9-2,2-2h26C30,21,30,21.9,30,23z M27,26H5c-0.6,0-1,0.4-1,1s0.4,1,1,1h22c0.6,0,1-0.4,1-1
                                S27.6,26,27,26z M27,23H5c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1C28,23.4,27.6,23,27,23z"/>
                            </svg>
                                Curriculum
                            </a>
                        </li>
                        <li class="skills-link">
                            <a href="skills.html">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32"
                                     enable-background="new 0 0 32 32" xml:space="preserve">
                                <g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32,3c0-1.7-1.3-3-3-3H3C1.3,0,0,1.3,0,3v20c0,1.7,1.3,3,3,3h26
                                    c1.7,0,3-1.3,3-3V3z M30,22c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V4c0-1.1,0.9-2,2-2h24c1.1,0,2,0.9,2,2V22z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2,19h28v2H2V19z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10,30h12c0.6,0,1,0.4,1,1c0,0.6-0.4,1-1,1H10c-0.6,0-1-0.4-1-1
                                    C9,30.4,9.4,30,10,30z"/>
                                    <g>
                                        <rect x="11" y="26" fill-rule="evenodd" clip-rule="evenodd" width="2"
                                              height="4"/>
                                        <rect x="19" y="26" fill-rule="evenodd" clip-rule="evenodd" width="2"
                                              height="4"/>
                                    </g>
                                </g>
                            </svg>
                                Work Skills
                            </a>
                        </li>
                        <li class="portfolio-link">
                            <a href="portfolio.html">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32"
                                     enable-background="new 0 0 32 32" xml:space="preserve">
                                <g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11,0H3C1.3,0,0,1.3,0,3v8c0,1.7,1.3,3,3,3h8c1.7,0,3-1.3,3-3V3
                                    C14,1.3,12.7,0,11,0z M12,10c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V4c0-1.1,0.9-2,2-2h6c1.1,0,2,0.9,2,2V10z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29,0h-8c-1.7,0-3,1.3-3,3v8c0,1.7,1.3,3,3,3h8c1.7,0,3-1.3,3-3V3
                                    C32,1.3,30.7,0,29,0z M30,10c0,1.1-0.9,2-2,2h-6c-1.1,0-2-0.9-2-2V4c0-1.1,0.9-2,2-2h6c1.1,0,2,0.9,2,2V10z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29,18h-8c-1.7,0-3,1.3-3,3v8c0,1.7,1.3,3,3,3h8c1.7,0,3-1.3,3-3
                                    v-8C32,19.3,30.7,18,29,18z M30,28c0,1.1-0.9,2-2,2h-6c-1.1,0-2-0.9-2-2v-6c0-1.1,0.9-2,2-2h6c1.1,0,2,0.9,2,2V28z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11,18H3c-1.7,0-3,1.3-3,3v8c0,1.7,1.3,3,3,3h8c1.7,0,3-1.3,3-3
                                    v-8C14,19.3,12.7,18,11,18z M12,28c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2v-6c0-1.1,0.9-2,2-2h6c1.1,0,2,0.9,2,2V28z"/>
                                </g>
                            </svg>
                                My works
                            </a>
                        </li>
                        <li class="contact-link">
                            <a href="contacts.html">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32"
                                     enable-background="new 0 0 32 32" xml:space="preserve">
                                <path d="M19,9h-8v1h8V9z M22,11H11v1h11V11z M31,11.4C31,11.4,31,11.4,31,11.4l-4-3.4V4h-5l-3.9-3.3
                                c-1.2-0.9-2.8-0.9-4.1,0L10.1,4H6v3.4l-4.9,4.1C0.4,11.8,0,12.6,0,14v15c0,1.7,1.3,3,3,3h26c1.7,0,3-1.3,3-3V14
                                C32,12.6,31.6,11.9,31,11.4z M27,10.7l1.9,1.6L28.2,13H28c0.1,0,0.1,0,0.2,0L27,14V10.7z M15.3,2.2c0.2-0.2,0.5-0.3,0.8-0.3
                                c0.3,0,0.6,0.1,0.8,0.2L19,4h-5.8L15.3,2.2z M8,6h17v9.8l-8.2,7.1c-0.2,0.1-0.5,0.2-0.8,0.2c-0.3,0-0.5-0.1-0.8-0.3L8,16.1V6z
                                M6,9.9v4.4L3.5,12L6,9.9z M2.1,28.6C2,28.4,2,28.2,2,28V15c0-0.5,0.2-0.9,0.4-1.3l8.1,7.4L2.1,28.6z M28,30H4c-0.1,0-0.3,0-0.4,0
                                l8.4-7.5l0,0l2,1.9c1.2,1,2.9,0.9,4.1,0l2-1.8l8.3,7.4C28.3,30,28.1,30,28,30z M30,28c0,0.2,0,0.4-0.1,0.6l-8.2-7.3l8.2-7.1
                                c0.1,0.3,0.2,0.5,0.2,0.8V28z M21,13H11v1h10V13z"/>
                            </svg>
                                Contact me
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <a href="index.html" class="logo">
                <span class="logo-name">Manson Johnes</span>

                <div class="logo-line">
                    <span>i`m passionated for print desing, Ui &amp; Web design</span>
                </div>
            </a>
        </div>
    </header>
    <div class="container">
       <?=$content;?>
    </div>
</div>

<footer>
    <div class="container">
        <p class="footer-copyright">Copyright &copy; 2014 All rights reserved</p>

        <div class="footer-social-links">
            <a href="#"><span class="icon-facebook"></span></a>
            <a href="#"><span class="icon-twitter"></span></a>
            <a href="#"><span class="icon-vimeo"></span></a>
            <a href=""><span class="icon-youtube"></span></a>
            <a href="#"><span class="icon-behance"></span></a>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


