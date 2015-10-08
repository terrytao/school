<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EmployerJobSchoolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employer Job Schools';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employer-job-school-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employer Job School', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'employer_job_school_id',
            'employer_id',
            'job',
            'school',
            'major',
            // 'time_created',
            // 'time_updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
