<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resume Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-course-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Resume Course', ['create?resumeId=' . @$_GET['resumeId']],
            ['class' => 'btn btn-success']) ?>

        <?= Html::a('Add Projects', ['/resume-projects/index?resumeId=' . @$_GET['resumeId']],
            ['class' => 'btn btn-success']) ?>



    </p>
    <p>
        <?= Html::a('Preview Resume', ['resume/view-resume?resumeId=' . @$_GET['resumeId']],
            ['class' => 'btn btn-danger']) ?>

    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'resume_course_id',
            'resume_id',
            'content:ntext',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
