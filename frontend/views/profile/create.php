<?php
use newerton\jcrop\jCrop;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\widgets\Typeahead;
use yii\helpers\Url;
use frontend\models\Student;
use yii\web\View;


$this->params['breadcrums'][] = $this->title;
/**
 * @var $this yii\web\View
 */
?>
<?


$this->registerCssFile('//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css',
    ['position' => View::POS_LOAD]);


$this->registerJsFile('//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js');
?>


<div class="col-md-12">
    <h1><?= Html::encode($this->title) ?></h1>


    <div class="panel panel-default">
        <div class="panel-heading">Panel heading without title</div>
        <div class="panel-body">
            Panel content
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Create Profile</h3>
        </div>
        <div class="panel-body">


            <p> Please fill out the form</p>

            <p> 请填写注册表</p>

            <?php $form = ActiveForm::begin(['id' => 'form-student-signup']); ?>

            <div class="col-md-12"> <?= Html::label('School Name', 'school_name'); ?>
                <?= Html::textInput('school_name', '', ['id' => 'school', 'style' => 'width:100%']); ?>
                <?= Html::hiddenInput('school_id', '', ['id' => 'school_id', 'style' => 'width:100%']); ?>
            </div>
            <div class="col-md-12">
                <?= Html::label('Major', 'major_name'); ?>
                <?= Html::textInput('major_name', '', ['id' => 'major_name', 'style' => 'width:100%']); ?>
                <?= Html::hiddenInput('major_id', '', ['id' => 'major_id', 'style' => 'width:100%']); ?>
            </div>
            <? //= $form->field($model, 'expiration_date')->radioList(Job::$expirationTimes); ?>
            <?= $form->field($model, 'gender')->radioList(Student::$gender) ?>

            <?= $form->field($model, 'student_name') ?>

            <?= Html::activeHiddenInput($model, 'school_id'); ?>

            <?= Html::activeHiddenInput($model, 'major_id'); ?>

            <? //= $form->field($model, 'gender') ?>
            <?= $form->field($model, 'finish_year')->textInput() ?>
            <? //= $form->field($model, 'major_level') ?>



            <div class="form-group">
                <?= Html::submitButton('Save Profile', ['class' => 'btn btn-primary', 'name' => 'student-signup-button']) ?>

            </div>


            <?php $form = ActiveForm::end() ?>
        </div>

    </div>

</div>


<div class="row">

</div>

<script>
    $(document).ready(function () {
        $("#school").select2({

            ajax: {
                url: "/schools/find-schools",
                dataType: 'json',

                data: function (term, page) {
                    return {
                        q: term
                    };
                },
                results: function (data, page) {
                    return {results: data};
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    };
                }
            }
        })

        $("#school").on("change", function (e) {
            console.log(e.added.id);
            $('#student-school_id').val(e.added.id);
        });

        $("#major_name").select2({
            multiple: 'multiple',
            ajax: {
                url: "/profile/ajax-find-majors",
                dataType: 'json',
                data: function (term, page) {
                    return {
                        q: term, // search term
                        schoolId: $('#school_id').val()

                    }
                },
                results: function (data) {
                    var myResults = [];
//                    $.each(data, function (index, item) {
//                        myResults.push({
//                            'id': item.id,
//                            'text': item.id + " " + item.text
//                        });
//                    });
                    return {
                        results: data
                    };
                }
            }
        })
        ;
        $("#major_name").on("change", function (e) {
            console.log(e);
            if (e.added) {
                var currentMajorIds = $('#student-major_id').val();
                var newValue = currentMajorIds + "," + e.added.id;
                $('#student-major_id').val(newValue);
            } else if (e.removed) {
                var currentMajorIds = $('#student-major_id').val();
                var newValue = currentMajorIds.replace(e.removed.id, '');
                $('#student-major_id').val(newValue);
            }
            // $('#student-major_id').val(e.added.id);
        });
    });



</script>