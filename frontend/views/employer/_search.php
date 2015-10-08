<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\EmployerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'employer_id') ?>

    <?= $form->field($model, 'time_created') ?>

    <?= $form->field($model, 'time_updated') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'employer_name') ?>

    <?php // echo $form->field($model, 'employer_description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
