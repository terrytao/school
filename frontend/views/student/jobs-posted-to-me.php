<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\bootstrap;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php
    Pjax::begin(['id'=>'PtlCommentsPjax']);
    ?>
    <p>
        <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],

            'job_id',


            ['class' => 'yii\grid\ActionColumn',
             'template'=>'{save}{post}{apply}',
             'buttons'=>[
                 'save'=>function($url, $model, $index){

                     return Html::a('<span class="glyphicon glyphicon-save"></span>', Url::to([
                         'save-jobs',
                         'jobPostingId'=>$index,
                     ]) ,[
                         'title' => Yii::t('yii', '保存'),
                     ]);

                 },

                 'post'=>function($url, $model, $index){

                     return Html::a('', '', [

                     ]);

                 },

                 'apply'=>function($url, $model, $index){

                     return Html::a('', '', [

                     ]);

                 },
             ]


            ],
        ],
    ]); ?>

    <?php
    Pjax::end(['id'=>'PtlCommentsPjax']);
    ?>

</div>
