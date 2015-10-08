<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resume Photos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-photo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Resume Photo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'resume_photo_id',
            'resume_id',
            'photo_name',
            'photo_title',
            'photo_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
