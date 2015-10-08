<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Student */
?>
<div class="jumbotron">
        <h1>create a profile!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">请注册学校和专业</a></p>
        <p><a class="btn btn-group-sm btn-success" href="http://www.yiiframework.com">让雇主来找你</a></p>
    </div>
<?php
$this->title = 'Create Student';
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
