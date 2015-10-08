<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EmployerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'My Job Applicant';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'student_id',
                'format'=>'raw',
                'value'=> function($data){

                    $resume = \frontend\models\Resume::find()->where(['student_id'=>$data->student_id])->one();
                    return Html::a($data->student_id,['/resume/view-resume', 'resumeId'=>$resume->resume_id]);
                }
            ],

            'time_created',

            // 'employer_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
