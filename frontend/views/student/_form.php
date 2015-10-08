<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\widgets\Typeahead;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'school_id')->hiddenInput() ?>

    <?= $form->field($model, 'major_id')->textInput() ?>

    <?= $form->field($model, 'school_major_id')->textInput() ?>

    <?=
    $form->field($model, 'school_name')->widget(Typeahead::classname(), [
        'options' => ['placeholder' => 'Search School 搜索学校...'],
        'pluginOptions' => ['highlight'=>true],
        'dataset' => [
            [
                'remote' => Url::to(['schools/find-schools']).'?q=%QUERY',
                'limit' => 100
            ]
        ]
    ]);
    ?>

    <?=
    $form->field($model, 'major_name')->widget(Typeahead::classname(), [
        'options' => ['placeholder' => 'Search Major 搜索专业...'],
        'pluginOptions' => ['highlight'=>true],
        'dataset' => [
            [
                'remote' => Url::to(['schools/find-majors']).'?q=%QUERY',
                'limit' => 100
            ]
        ]
    ]);
    ?>

    <?
    echo Typeahead::widget([
        'name' => 'school_name',
        'options' => ['placeholder' => 'Search School 搜索学校...'],
        'pluginOptions' => ['highlight'=>true, 'hint'=>false],
        'dataset' => [
            [
                'remote' => Url::to(['schools/find-schools']).'?q=%QUERY',
                'limit' => 10000
            ]
        ],

    ]);

    ?>

    <?
    echo Typeahead::widget([
        'name' => 'major_name',
        'options' => ['placeholder' => 'Search Major 搜索专业...'],
        'pluginOptions' => ['highlight'=>true, 'hint'=>false],
        'dataset' => [
            [
                'remote' => Url::to(['schools/find-majors']).'?q=%QUERY',
                'limit' => 1000
            ]
        ],

    ]);

    ?>

    <?= $form->field($model, 'student_name')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'student_degree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'finish_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'major_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
