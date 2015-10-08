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


            <?= $form->field($employer_profile, 'employer_name') ?>
            <?= $form->field($employer_profile, 'employer_description') ?>



            <div class="form-group">
                <?=  Html::submitButton('Create Profile', ['class'=>'btn btn-primary', 'name'=>'student-signup-button'])?>

            </div>


            <?php $form = ActiveForm::end() ?>
        </div>

    </div>

</div>



