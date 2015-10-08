<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\SchoolMajor */

$this->title = 'Update School Major: ' . ' ' . $model->school_major_id;
$this->params['breadcrumbs'][] = ['label' => 'School Majors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->school_major_id, 'url' => ['view', 'id' => $model->school_major_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="school-major-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
