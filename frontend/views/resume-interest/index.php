<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/28/15
 * Time: 5:46 PM
 */
use yii\helpers\Html;
use yii\grid\GridView;

use yii\helpers\Url;
use yii\bootstrap;




$this->title = 'Resume Interests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-interest-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?//=  print_r($resumeId); die;?>
        <?=  Html::a('Create Interest', ['create', 'resumeId'=>$resumeId ],['class'=>'btn btn-success'])?>
    </p>

    <?= GridView::widget([
        'dataProvider'=> $dataProvider,
        'columns'=>[
            'interest',
            ['class'=>'yii\grid\actionColumn',
                'template'=>'{delete}',
                'buttons'=>[
                    'delete'=>function($url, $model){
                        return Html::a('<span class="glyphicon glyphicon-minus"></span>', Url::to(
                            [
                            'delete', 'resumeInterestId'=>$model->resume_interest_id, 'resumeId'=>$model->resume_id]),
                            [
                            'title' => Yii::t('yii', 'delete interest'),
                            'data-confirm' => Yii::t('yii', '你确认要删除这个interest 吗?')


                        ]);
                    }

                ]
            ],
        ],
 /*
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
        */
    ]);

    ?>
    </br>

    <div><?= Html::a('Go Back', ['resume/my-resume'],['class'=>'btn-lg btn-success']); ?></div>

</div>