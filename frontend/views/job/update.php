<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Job */

$this->title = 'Update Job: ' . ' ' . $model->job_id;
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->job_id, 'url' => ['view', 'id' => $model->job_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="job-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
