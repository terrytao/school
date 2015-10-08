<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Employer */

$this->title = 'Create Employer';
$this->params['breadcrumbs'][] = ['label' => 'Employers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
