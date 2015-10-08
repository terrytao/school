<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\JobPosting */

$this->title = $model->job_posting_id;
$this->params['breadcrumbs'][] = ['label' => 'Job Postings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-posting-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->job_posting_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->job_posting_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'job_posting_id',
            'school_major_student_id',
            'employer_id',
            'job_id',
            'to_school',
            'to_major',
            'to_student',
            'time_created',
            'time_updated',
            'school_id',
            'major_id',
            'student_id',
        ],
    ]) ?>
    <div class="job-invitation-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($jobInvitation, 'student_id')->dropDownList(ArrayHelper::map($students, 'student_id',
            'student_name'),['prompt'=>'Select a Student to Invite']) ?>

        <?= $form->field($jobInvitation, 'job_posting_id')->textInput(['maxlength' => true]) ?>

        <?= $form->field($jobInvitation, 'date_created')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton($jobInvitation->isNewRecord ? 'Create' : 'Update',
                ['class' => $jobInvitation->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
