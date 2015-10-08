<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Employer */

$this->title = 'Update Employer: ' . ' ' . $model->employer_id;
$this->params['breadcrumbs'][] = ['label' => 'Employers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->employer_id, 'url' => ['view', 'id' => $model->employer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
