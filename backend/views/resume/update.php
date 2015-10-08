<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Resume */

$this->title = 'Update Resume: ' . ' ' . $model->resume_id;
$this->params['breadcrumbs'][] = ['label' => 'Resumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->resume_id, 'url' => ['view', 'id' => $model->resume_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resume-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
