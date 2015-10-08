<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
<div class="loginbox bg-white">
    <div class="loginbox-title">SIGN IN</div>
    <div class="loginbox-social">
        <div class="social-title ">Connect with Your Social Accounts</div>
        <div class="social-buttons">
            <a href="" class="button-facebook">
                <i class="social-icon fa fa-facebook"></i>
            </a>
            <a href="" class="button-twitter">
                <i class="social-icon fa fa-twitter"></i>
            </a>
            <a href="" class="button-google">
                <i class="social-icon fa fa-google-plus"></i>
            </a>
        </div>
    </div>
    <div class="loginbox-or">
        <div class="or-line"></div>
        <div class="or">OR</div>
    </div>
    <div class="loginbox-textbox">
        <?= $form->field($model, 'username') ?>
    </div>
    <div class="loginbox-textbox">
        <?= $form->field($model, 'password')->passwordInput() ?>
    </div>
    <div class="loginbox-forgot">
        <a href="">Forgot Password?</a>
    </div>
    <div class="loginbox-submit">
        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    </div>
    <div class="loginbox-signup">
        <div style="color:#999;margin:1em 0">
            If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
<div class="logobox">
</div>

