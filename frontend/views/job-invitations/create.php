<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\JobInvitation */

$this->title = 'Create Job Invitation';
$this->params['breadcrumbs'][] = ['label' => 'Job Invitations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-invitation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,    'students' => $students
    ]) ?>

</div>
