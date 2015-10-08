<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Resume */

$this->title = $model->resume_id;
$this->params['breadcrumbs'][] = ['label' => 'Resumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="resume-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?=$model->first_name;?>
    <?=$model->last_name;?><br>
   <?=$model->resume_content;?>
<br>
<?=Html::a('Invite to Job','#',['class'=>'btn btn-primary']);?>
</div>
