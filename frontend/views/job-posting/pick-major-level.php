<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Major;
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/30/15
 * Time: 11:04 AM
 */?>
<? $form = ActiveForm::begin(); ?>

 <?= $form->field($model, 'major_level')->textInput(); ?>



<? ActiveForm::end()?>

