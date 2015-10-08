<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\JobPostingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="job-posting-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'job_posting_id') ?>

    <?= $form->field($model, 'school_major_student_id') ?>

    <?= $form->field($model, 'employer_id') ?>

    <?= $form->field($model, 'job_id') ?>

    <?= $form->field($model, 'to_school') ?>

    <?php // echo $form->field($model, 'to_major') ?>

    <?php // echo $form->field($model, 'to_student') ?>

    <?php // echo $form->field($model, 'time_created') ?>

    <?php // echo $form->field($model, 'time_updated') ?>

    <?php // echo $form->field($model, 'school_id') ?>

    <?php // echo $form->field($model, 'major_id') ?>

    <?php // echo $form->field($model, 'student_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
