<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model backend\models\SchoolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-search">

    <?php

    $this->registerJs(
        '$("document").ready(function(){
        $("#new_country").on("pjax:end", function() {
            $.pjax.reload({container:"#countries"});  //Reload GridView
        });
    });'
    );
    ?>

    <div class="countries-form">

        <?php yii\widgets\Pjax::begin(['id' => 'new_country']) ?>
        <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true ]]); ?>

        <?= $form->field($model, 'school_name')->textInput(['maxlength' => 200]) ?>


        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
        <?php yii\widgets\Pjax::end() ?>
    </div>

    <?  Pjax::begin(); ?>
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'enableAjaxValidation'=>true,
    ]); ?>




    <?= $form->field($model, 'school_id') ?>

    <?= $form->field($model, 'school_name') ?>

    <?= $form->field($model, 'school_level')->checkboxList(['普通本科' => '普通本科', '高职高专' => '高职高专', ]) ?>

    <?= $form->field($model, 'school_region') ?>


    <?= $form->field($model, 'is_211')->checkbox(array('label'=>'is_211')); ?>

    <?php // echo $form->field($model, 'is_985') ?>

    <?php // echo $form->field($model, 'is_central') ?>

    <?php // echo $form->field($model, 'school_category') ?>



    <div class="form-group">
        <?= Html::submitButton('Search 学校', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <? Pjax::end(); ?>
</div>
