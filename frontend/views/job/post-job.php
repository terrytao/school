<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\JobSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Job', ['create'], ['class' => 'btn btn-success']) ?>
    </p>




    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],

            'job_id',
            'employer_id',
            'time_created',
            'time_updated',
            'job_description',

            //['class' => 'yii\grid\ActionColumn'],

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{save}{post}',
                'buttons' => [
                    'save' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-plus"></span>', Url::to('../employer/action'), [
                            'title' => Yii::t('yii', 'Save'),
                        ]);
                    },
                    'post' => function ($url, $model, $index) {
                        return Html::a('<span class="glyphicon glyphicon-envelope"></span>', Url::to(['/publish-job-step1',  'job_id'=>$model->job_id, 'job_name'=>$model->job_description, 'index'=>$index]), [
                            'title' => Yii::t('yii', 'Send to Selected Majors or Students'),

                        ]);
                    }
                ],
            ],
        ],
    ]); ?>


    <p>
        <?= Html::a('Post Jobs', ['/publish-job'], ['class' => 'btn btn-success']) ?>
    </p>




</div>
