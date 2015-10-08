<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ResumePhoto */

$this->title = 'Create Resume Photo';
$this->params['breadcrumbs'][] = ['label' => 'Resume Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-photo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
