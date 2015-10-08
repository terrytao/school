<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\SchoolMajor */

$this->title = 'Create School Major';
$this->params['breadcrumbs'][] = ['label' => 'School Majors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-major-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
