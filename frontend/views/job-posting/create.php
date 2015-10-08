<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\JobPosting */

$this->title = 'Create Job Posting';
$this->params['breadcrumbs'][] = ['label' => 'Job Postings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-posting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
