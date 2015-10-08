<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ResumeCourse */

$this->title = 'Create Resume Course';
$this->params['breadcrumbs'][] = ['label' => 'Resume Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-course-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
