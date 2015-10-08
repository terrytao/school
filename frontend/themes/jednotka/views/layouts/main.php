<?php
use frontend\models\Resume;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */
// The AppAsset file that hold the css and js file names is registered in the layout
\frontend\assets\JedNotKaAsset::register($this);
$theme = $this->theme;
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>


    <?php
    // then the JS and CSS files are loaded using this function based on their configuration in the AppAsset class
    $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<body class='homepage'>
<div id='wrapper'>
    <header id='header'>
        <div class='container'>
            <nav class='navbar navbar-collapsed-sm navbar-default' id='nav' role='navigation'>
                <div class='navbar-header'>
                    <button class='navbar-toggle' data-target='.navbar-header-collapse' data-toggle='collapse'
                            type='button'>
                        <span class='sr-only'>Toggle navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                    <a class='navbar-brand' href='index.html'>
                        <img alt="Jednotka" width="117" height="39"
                             src="<?= $theme->getUrl('assets/images/logo.svg'); ?>"/>
                    </a>
                </div>
                <div class='collapse navbar-collapse navbar-header-collapse'>
                    <ul class='nav navbar-nav navbar-right'>
                        <li class='active dropdown'>
                            <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown'
                               href='#'>
                    <span>
                      Home
                      <i class='fa fa-angle-down'></i>
                    </span>
                            </a>
                            <ul class='dropdown-menu' role='menu'>
                                <li class='active dropdown-submenu'>
                                    <a href='index.html'>Home</a>
                                </li>
                                <li class=''>
                                    <a href='index2.html'>Home 2</a>
                                </li>
                                <li class=''>
                                    <a href='index3.html'>Home 3</a>
                                </li>
                                <li class=''>
                                    <a href='boxed.html'>Boxed layout</a>
                                </li>
                            </ul>
                        </li>
                        <li class='dropdown'>
                            <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown'
                               href='#'>
                    <span>
                      Pages
                      <i class='fa fa-angle-down'></i>
                    </span>
                            </a>
                            <ul class='dropdown-menu' role='menu'>
                                <li class=''>
                                    <a href='about_us.html'>About us</a>
                                </li>
                                <li class=''>
                                    <a href='services.html'>Services</a>
                                </li>
                                <li class=''>
                                    <a href='faq'>FAQ</a>
                                </li>
                                <li>
                                    <a href='404.html'>404 Error</a>
                                </li>
                                <li>
                                    <a href='500.html'>500 Error</a>
                                </li>
                                <li>
                                    <a href='coming_soon.html'>Coming soon</a>
                                </li>
                                <li>
                                    <a href='under_construction.html'>Under construction</a>
                                </li>
                            </ul>
                        </li>

                        <li class='dropdown'>
                            <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown'
                               href='#'>
                    <span>
                      Blog
                      <i class='fa fa-angle-down'></i>
                    </span>
                            </a>
                            <ul class='dropdown-menu' role='menu'>
                                <li class=''>
                                    <a href='blog_small.html'>Small image</a>
                                </li>
                                <li class=''>
                                    <a href='blog_large.html'>Large image</a>
                                </li>
                                <li class=''>
                                    <a href='blog_single_post.html'>Single post</a>
                                </li>
                            </ul>
                        </li>
                        <li class='dropdown'>
                            <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown'
                               href='#'>
                    <span>
                      Portfolio
                      <i class='fa fa-angle-down'></i>
                    </span>
                            </a>
                            <ul class='dropdown-menu' role='menu'>
                                <li class=''>
                                    <a href='portfolio.html'>2 columns</a>
                                </li>
                                <li class=''>
                                    <a href='portfolio_three_cols.html'>3 columns</a>
                                </li>
                                <li class=''>
                                    <a href='portfolio_four_cols.html'>4 columns</a>
                                </li>
                                <li class=''>
                                    <a href='portfolio_detail.html'>Project detail</a>
                                </li>
                            </ul>
                        </li>
                        <li class=''>
                            <?=Html::a('<span>Login <i class="fa fa-angle-down"></i> </span>',['/sign-in'],[
                            ]);?>
                        </li>
                        <li class=''>
                            <?=Html::a('<span>Student Sign Up <i class="fa fa-angle-down"></i> </span>',['/sign-up?type=student'],[
                            ]);?>
                        </li>
                        <li class=''>
                            <?=Html::a('<span>Employer Sign Up <i class="fa fa-angle-down"></i> </span>',['/sign-up?type=employer'],[
                            ]);?>
                        </li>
                        <li class='dropdown'>
                            <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown'
                               href='#'>
                    <span>
                      Contact
                      <i class='fa fa-angle-down'></i>
                    </span>
                            </a>
                            <ul class='dropdown-menu' role='menu'>
                                <li class=''>
                                    <a href='/site/faq'>Contact</a>
                                </li>
                                <li class=''>
                                    <a href='/site/faq'>FAQ</a>
                                </li>
                                <li class=''>
                                    <a href='contact3.html'>Contact 3</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <?= $content; ?>
    <footer id='footer'>
        <div id='footer-main'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-3 col-sm-6 info-box'>
                        <div class='logo-container'>
                            <img alt="Jednotka" width="117" height="39"
                                 src="<?= $theme->getUrl('assets/images/logo.svg'); ?>"/>
                        </div>
                        <p class='no-mg-b'>Integer vulputate porta augue, sit amet interdum tellus commodo et. Sed
                            volutpat neque vel turpis ultrices sini bibendum. Aliquam quis malesuada.</p>
                    </div>
                    <div class='col-md-3 col-sm-6 info-box'>
                        <h2 class='title'>Contact</h2>

                        <div class='icon-boxes'>
                            <div class='icon-box'>
                                <div class='icon icon-wrap'>
                                    <i class='fa fa-map-marker'></i>
                                </div>
                                <div class='content'>
                                    4567 Street name,
                                    <br>
                                    012 12 City name, Country
                                </div>
                            </div>
                            <div class='icon-box'>
                                <div class='icon icon-wrap'>
                                    <i class='fa fa-phone'></i>
                                </div>
                                <div class='content'>
                                    <a href='tel:+012345678'>+012 345 678</a>
                                </div>
                            </div>
                            <div class='icon-box'>
                                <div class='icon icon-wrap'>
                                    <i class='fa fa-envelope'></i>
                                </div>
                                <div class='content'><a href="mailto:info@bublinastudio.com">info@bublinastudio.com</a>
                                </div>
                            </div>
                            <div class='icon-box'>
                                <div class='icon icon-wrap'>
                                    <i class='fa fa-globe'></i>
                                </div>
                                <div class='content'><a href="#">www.bublinastudio.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-3 col-sm-6 info-box social-box'>
                        <h2 class='title'>Latest tweets</h2>

                        <div class='icon-boxes'>
                            <div class='icon-box'>
                                <div class='icon icon-wrap'>
                                    <i class='fa fa-twitter text-contrast'></i>
                                </div>
                                <div class='content'>
                                    <p>
                                        Phasellus vulputate lobortis sem. Mauris id velit in urna.
                                        <br>
                                        <a class='time' href='#'>
                                            <i>1 hour ago</i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class='icon-box'>
                                <div class='icon icon-wrap'>
                                    <i class='fa fa-twitter text-contrast'></i>
                                </div>
                                <div class='content'>
                                    <p>
                                        Etiam luctus, dui congue tempus blandit, dui.
                                        <br>
                                        <a class='time' href='#'>
                                            <i>3 hours ago</i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-3 col-sm-6 info-box'>
                        <h2 class='title'>Newsletter</h2>

                        <p>Proin condimentum, nisi vel vestibulum ultricies, nunc elit.</p>

                        <form action='index.html' class='form-inline form-validation' method='get'>
                            <div class='row'>
                                <div class='form-group control-group col-xs-9 col-md-8 col-lg-9'>
                                    <input class='form-control' data-rule-email='true' data-rule-required='true'
                                           id='newsletter_email' name='newsletter[email]' placeholder='Email address'
                                           type='email'>
                                </div>
                                <div class='col-xs-3 col-md-4 col-lg-3'>
                                    <button class='btn btn-medium-light btn-block' type='submit'>
                                        <i class='fa fa-reply text-white'></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id='footer-copyright'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-12 clearfix'>
                        <p class='copyright'>
                            Copyright
                            &copy;
                            2013 Jednotka
                        </p>

                        <div class='links'>
                            <a class='btn btn-circle btn-medium-light btn-sm' href='#'>
                                <i class='fa fa-twitter text-dark'></i>
                            </a>
                            <a class='btn btn-circle btn-medium-light btn-sm' href='#'>
                                <i class='fa fa-dribbble text-dark'></i>
                            </a>
                            <a class='btn btn-circle btn-medium-light btn-sm' href='#'>
                                <i class='fa fa-facebook text-dark'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
