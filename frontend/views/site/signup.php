<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signupp']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 form-group">
        <label>Label1</label>
        <input class="form-control" type="text"/>
    </div>
    <div class="col-xs-6 form-group">
        <label>Label2</label>
        <input class="form-control" type="text"/>
    </div>
    <div class="col-xs-6">
        <div class="row">
            <label class="col-xs-12">Label3</label>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <input class="form-control" type="text"/>
            </div>
            <div class="col-xs-12 col-sm-6">
                <input class="form-control" type="text"/>
            </div>
        </div>
    </div>
    <div class="col-xs-6 form-group">
        <label>Label4</label>
        <input class="form-control" type="text"/>
    </div>
</div>

<div class="container">
    <div class="row clearfix">

        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6  column col-sm-offset-0 col-md-offset-2 col-lg-offset-3">

            <form class="form-horizontal">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Form Name</legend>
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="selectbasic">Select Basic</label>
                        <div class="col-md-9">
                            <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value="1">Option one</option>
                                <option value="2">Option two</option>
                                <option value="3">Option three</option>
                            </select>
                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textinput">Text Input</label>
                        <div class="col-md-3">
                            <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                        </div>


                        <!-- Multiple Radios (inline) -->

                        <label class="col-md-3 control-label" for="radios">性别</label>
                        <div class="col-md-3">
                            <label class="radio-inline" for="radios-0">
                                <input type="radio" name="radios" id="radios-0" value="2" ">
                                Yes
                            </label>
                            <label class="radio-inline" for="radios-1">
                                <input type="radio" name="radios" id="radios-1" value="2">
                                No
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textinput">Text Input</label>
                        <div class="col-md-3">
                            <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                        </div>
                        <label class="col-md-3 control-label" for="textinput">Text Input</label>
                        <div class="col-md-3">
                            <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textarea">Text Area</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="button1id"></label>
                        <div class="col-md-8">
                            <button id="button1id" name="button1id" class="btn btn-success">Ok</button>
                            <button id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>

    </div>
</div>

<div class="container">
    <div class="jumbotron">


        <a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-thumbs-up"></span> 欢迎您回来， 同学!</a>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-success">
                <h4><strong>如果您已经注册， 请登录</strong></h4>
            </div>

            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'form-login']); ?>

                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton('登录', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="alert alert-danger">
               <h4> <strong>如果您还没有注册， 请先注册</strong></h4>
            </div>

            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton('注册', ['class' => 'btn btn-danger', 'name' => 'signup-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>


    </div>
</div>

