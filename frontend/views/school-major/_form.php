<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SchoolMajor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-major-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'school_id')->textInput() ?>

    <?= $form->field($model, 'major_id')->textInput() ?>

    <?= $form->field($model, 'time_created')->textInput() ?>

    <?= $form->field($model, 'time_updated')->textInput() ?>

    <?= $form->field($model, 'number_of_male_student')->textInput() ?>

    <?= $form->field($model, 'major_level')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
