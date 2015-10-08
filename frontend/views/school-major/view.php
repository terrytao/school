<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\SchoolMajor */

$this->title = $model->school_major_id;
$this->params['breadcrumbs'][] = ['label' => 'School Majors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-major-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->school_major_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->school_major_id], [
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
            'school_major_id',
            'school_id',
            'major_id',
            'time_created',
            'time_updated',
            'number_of_male_student',
            'major_level',
        ],
    ]) ?>

</div>
