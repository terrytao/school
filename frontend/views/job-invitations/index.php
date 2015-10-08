<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\JobInvitationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Job Invitations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-invitation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Job Invitation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'job_invitation_id',
            'student_id',
            'job_posting_id',
            'date_created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
