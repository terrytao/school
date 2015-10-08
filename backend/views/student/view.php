<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\activeform;

/* @var $this yii\web\View */
/* @var $model backend\models\Student */

$this->title = $model->student_id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->student_id], [
            'class' => 'btn btn-primary',]) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->student_id], [
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
            'student_id',
            'school_id',
            'major_id',
            'school_major_id',
            'student_name',
            'school_name',
            'major_name',
            'student_degree',
        ],
    ]) ?>




</div>
