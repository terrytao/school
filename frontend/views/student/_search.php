<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\StudentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'school_id') ?>

    <?= $form->field($model, 'major_id') ?>

    <?= $form->field($model, 'school_major_id') ?>

    <?= $form->field($model, 'student_name') ?>

    <?php // echo $form->field($model, 'school_name') ?>

    <?php // echo $form->field($model, 'major_name') ?>

    <?php // echo $form->field($model, 'student_degree') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'finish_year') ?>

    <?php // echo $form->field($model, 'major_level') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>