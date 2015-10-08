<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resume Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-project-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Resume Project', ['create','resumeId'=>@$_GET['resumeId']], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [


            'resume_project_id',
            'resume_id',
            'project_name',
            'project_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
