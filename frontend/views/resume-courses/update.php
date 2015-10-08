<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResumeCourse */

$this->title = 'Update Resume Course: ' . ' ' . $model->resume_course_id;
$this->params['breadcrumbs'][] = ['label' => 'Resume Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->resume_course_id, 'url' => ['view', 'id' => $model->resume_course_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resume-course-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
