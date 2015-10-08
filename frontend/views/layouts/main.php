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
AppAsset::register($this);
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
<div class="wrap">
    <?
    // which model
    $resumeMain = new Resume();
    ?>
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],

    ];
    if (Yii::$app->session->get('studentId')) {

        $menuItems[] = ['label' => 'Resume', 'url' => ['/resume']];
        $menuItems[] = ['label' => 'My Jobs', 'url' => ['/job/my-jobs']];
        $menuItems[] = ['label' => 'Active Jobs', 'url' => ['/student/active-jobs']];
        $menuItems[] = ['label' => 'My Job Invitations', 'url' => ['/job/my-invitations']];
    }

    if (Yii::$app->session->get('employerId')) {


        $menuItems[] = ['label' => 'Jobs', 'url' => ['/job']];

    }


    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Student Signup', 'url' => ['/site/student-signup']];
        $menuItems[] = ['label' => 'Employer Signup', 'url' => ['/site/employer-signup']];

        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];

    } else {
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];

    }
    /*
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Employer Signup', 'url' => ['/site/employer-signup']];
               // $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {

                $menuItems[] = [
                    'label' => ' My Account ' . Yii::$app->user->identity->username ,
                    'url' => ['/student/my-account'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
    */
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

        <!----------- Load menu ------------->
        <div>
            <?//= Yii::$app->view->renderFile('@app/views/layouts/menu.php'); ?>
        </div>
        <!----------- /Load menu ------------->
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
