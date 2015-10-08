<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/28/15
 * Time: 5:48 PM
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="resume-interest-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'interest')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>



</div>