<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Resume */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model, 'resume_title')->textInput(['maxlenght'=>true]) ?>

    <?//= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'self_introduction')->textarea(['rows' => 6]) ?>

    <?//= $form->field($model, 'resume_content')->textarea() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Next' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
