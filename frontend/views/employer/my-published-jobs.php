<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EmployerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'My Published Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           [

             'attribute'=>'job_posting_id',
             'format'=>'raw',
             'value'=> function($data){

                 return Html::a($data->job_posting_id, ['my-job-applicants', 'jobPostingId'=>$data->job_posting_id ]);

             }
           ],


            [
              'attribute'=>'to_major',
               'format'=>'raw',
               'value'=> function($data){
                   return Html::a( $data->to_major== '1' ? '有 '.$data->number_of_application. ' 人  ' . 'applied': 'not applied',['my-job-applicants', 'jobPostingId'=>$data->job_posting_id ]);
               }
            ],



            'school_id',
            'major_id',
            'time_created',
            'time_updated',


            // 'employer_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
