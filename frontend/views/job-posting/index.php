<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\JobPostingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Job Postings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-posting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Job Posting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'job_posting_id',
            'school_major_student_id',
            'employer_id',
            'job_id',
            'to_school',
            // 'to_major',
            // 'to_student',
            // 'time_created',
            // 'time_updated',
            // 'school_id',
            // 'major_id',
            // 'student_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
