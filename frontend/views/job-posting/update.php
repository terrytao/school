<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\JobPosting */

$this->title = 'Update Job Posting: ' . ' ' . $model->job_posting_id;
$this->params['breadcrumbs'][] = ['label' => 'Job Postings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->job_posting_id, 'url' => ['view', 'id' => $model->job_posting_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="job-posting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
