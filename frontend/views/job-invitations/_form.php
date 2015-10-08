<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\JobInvitation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="job-invitation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->dropDownList(ArrayHelper::map($students, 'student_id',
        'student_name'),['prompt'=>'Select a Student to Invite']) ?>


    <?= $form->field($model, 'job_posting_id')->hiddenInput(['maxlength' => true]) ?>
    <?=$model->job_posting_id;?>
    <?= $form->field($model, 'date_created')->hiddenInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
