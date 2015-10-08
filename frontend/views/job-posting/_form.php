<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\JobPosting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="job-posting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'school_major_student_id')->textInput() ?>

    <?= $form->field($model, 'employer_id')->textInput() ?>

    <?= $form->field($model, 'job_id')->textInput() ?>

    <?= $form->field($model, 'to_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_major')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_student')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time_created')->textInput() ?>

    <?= $form->field($model, 'time_updated')->textInput() ?>

    <?= $form->field($model, 'school_id')->textInput() ?>

    <?= $form->field($model, 'major_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
