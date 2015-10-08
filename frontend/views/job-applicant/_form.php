<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/20/15
 * Time: 7:31 AM
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="job-applicant-form">

    <? $form = ActiveForm::begin() ?>

    <? $form->field($model, 'job_posting_id')->label();  ?>
    <? $form->field($model,'student_id')->label() ?>

    <? $form = ActiveForm::end()  ?>

</div>