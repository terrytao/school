<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SchoolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'school_id') ?>

    <?//= $form->field($model, 'school_name') ?>

    <?= $form->field($model, 'school_level') ?>

    <?= $form->field($model, 'school_province') ?>


    <?= $form->field($model, 'school_city') ?>

    <?= $form->field($model, 'school_category') ?>

    <?php  echo $form->field($model, 'is_211') ?>

    <?php // echo $form->field($model, 'is_985') ?>

    <?php // echo $form->field($model, 'is_central') ?>

    <?php // echo $form->field($model, 'number_of_major') ?>

    <?php // echo $form->field($model, 'school_name_pinying') ?>

    <?php // echo $form->field($model, 'school_name_combine') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
