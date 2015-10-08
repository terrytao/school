<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\School */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'school_id')->textInput() ?>

    <?= $form->field($model, 'school_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_211')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_985')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_central')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_category')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
