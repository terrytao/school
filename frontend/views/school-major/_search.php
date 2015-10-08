<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SchoolMajorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-major-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'school_major_id') ?>

    <?= $form->field($model, 'school_id') ?>

    <?= $form->field($model, 'major_id') ?>

    <?= $form->field($model, 'time_created') ?>

    <?= $form->field($model, 'time_updated') ?>

    <?php // echo $form->field($model, 'number_of_male_student') ?>

    <?php // echo $form->field($model, 'major_level') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
