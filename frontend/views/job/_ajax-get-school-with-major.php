<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SchoolMajorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'School Majors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-major-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create School Major', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'school_major_id',
            'school_id',
            'major_id',
            'time_created',
            'time_updated',
            // 'number_of_male_student',
            // 'major_level',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
