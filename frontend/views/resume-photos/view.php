<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResumePhoto */

$this->title = $model->resume_photo_id;
$this->params['breadcrumbs'][] = ['label' => 'Resume Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-photo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->resume_photo_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->resume_photo_id], [
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
            'resume_photo_id',
            'resume_id',
            'photo_name',
            'photo_title',
            'photo_description',
        ],
    ]) ?>

</div>
