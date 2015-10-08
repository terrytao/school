<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use kartik\widgets\Typeahead;
use yii\helpers\Url;



$this->params['breadcrums'][] = $this->title;

?>



<div class="student-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p> Please fill out the form</p>
    <p> 请填写注册表</p>



    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id'=>'form-student-signup']); ?>


            <?
            echo $form->field($student_profile, 'school_name')->widget(Typeahead::classname(), [

            'pluginOptions' => ['highlight' => true],
            'options' => ['placeholder' => 'Filter as you type ...'],
            'dataset' => [
                [
                    'remote' => Url::to(['schools/find-schools']).'?q=%QUERY',
                    'limit' => 1000,
                   // 'displayLink'=>'value',
                ]
            ],


            ]);
            ?>

            <?
            echo $form->field($student_profile, 'major_name')->widget(Typeahead::classname(), [

                'pluginOptions' => ['highlight' => true],
                'options' => ['placeholder' => 'Filter as you type ...'],
                'dataset' => [
                    [
                        'remote' => Url::to(['schools/find-majors']).'?q=%QUERY',
                        'limit' => 100,
                    //    'displayLink'=>'value',
                    ]
                ],




            ]);
            ?>

<!--            --><?//
//            echo Typeahead::widget([
//                'name' => 'school_name',
//                'options' => ['placeholder' => 'Search School 搜索学校...'],
//                'pluginOptions' => ['highlight'=>true, 'hint'=>false],
//                'dataset' => [
//                    [
//                        'remote' => Url::to(['schools/find-schools']).'?q=%QUERY',
//                        'limit' => 10000
//                    ]
//                ]
//            ]);
//
//            ?>
<!---->
<!--            --><?//
//            echo Typeahead::widget([
//                'name' => 'major_name',
//                'options' => ['placeholder' => 'Search Major 搜索专业...'],
//                'pluginOptions' => ['highlight'=>true, 'hint'=>false],
//                'dataset' => [
//                    [
//                        'remote' => Url::to(['schools/find-majors']).'?q=%QUERY',
//                        'limit' => 1000,
//                        'displayLink'=>'value',
//                    ]
//                ],
//
//            ]);
//
//            ?>

            <?= $form->field($student_profile, 'student_name') ?>
            <?= $form->field($student_profile, 'school_id') ?>
            <?= $form->field($student_profile, 'major_id') ?>
            <?= $form->field($student_profile, 'gender') ?>
            <?= $form->field($student_profile, 'finish_year') ?>
            <?= $form->field($student_profile, 'major_level') ?>


            <div class="form-group">
                <?=  Html::submitButton('Update Profile', ['class'=>'btn btn-primary', 'name'=>'student-signup-button'])?>
                <?= Html::a('Update', ['update-student-profile', 'student_id' => $student_profile->student_id], ['class' => 'btn btn-primary']) ?>

            </div>


            <?php $form = ActiveForm::end() ?>
        </div>

    </div>

</div>



