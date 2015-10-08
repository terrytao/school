<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'student_id',
//            [
//                'label'=>'School',
//                'format'=>'raw',
//                'value'=>function($data){
//                    return $data->school->school_name;
//                }
//            ],
            'student_id',
            [
                'label'=>'School',
                'format'=>'raw',
                'value'=>function($data){
                    return $data->school->school_name;
                }
            ],
            'major_id',
            'school_major_id',
            'student_name',
            // 'school_name',
            // 'major_name',
            // 'student_degree',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
