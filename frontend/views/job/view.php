<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Job */

$this->title = $model->job_id;
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $model->job_description; ?>

    <?= $model->job_description; ?>    <?= $model->expiration_date; ?>
    <?= $model->job_type; ?>    <?= $model->salary; ?>
    <?= $model->benefits; ?>


    <?= Html::a('Apply', ['/job/apply', 'jobId' => $model->job_id]); ?>
</div>
