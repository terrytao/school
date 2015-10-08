<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\JobInvitation */

$this->title = 'Update Job Invitation: ' . ' ' . $model->job_invitation_id;
$this->params['breadcrumbs'][] = ['label' => 'Job Invitations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->job_invitation_id, 'url' => ['view', 'id' => $model->job_invitation_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="job-invitation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
