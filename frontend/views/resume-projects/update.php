<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResumeProject */

$this->title = 'Update Resume Project: ' . ' ' . $model->resume_project_id;
$this->params['breadcrumbs'][] = ['label' => 'Resume Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->resume_project_id, 'url' => ['view', 'id' => $model->resume_project_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resume-project-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
