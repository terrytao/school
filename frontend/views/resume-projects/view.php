<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResumeProject */

$this->title = $model->resume_project_id;
$this->params['breadcrumbs'][] = ['label' => 'Resume Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->resume_project_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->resume_project_id], [
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
            'resume_project_id',
            'resume_id',
            'project_name',
            'project_description',
        ],
    ]) ?>

</div>
