<?php

/* @var $this yii\web\View */
/* @var $model frontend\models\Job */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>


<?php $form = ActiveForm::begin(); ?>

<?= Html::dropDownList('resume', '', \yii\helpers\ArrayHelper::map($student->resumes, 'resume_id', 'resume_id'),
    ['prompt' => 'Select Resume']) ?>


<?php ActiveForm::end(); ?>