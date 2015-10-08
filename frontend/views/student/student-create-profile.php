<?php
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
<? $this->registerCssFile(Yii::$app->urlManager->baseUrl . '/js/fine-uploader/fineuploader-new.css',
    ['position' => View::POS_LOAD]);


$this->registerCssFile('//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css',
    ['position' => View::POS_LOAD]);


$this->registerJsFile('//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js');
?>

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
        }).on("select2:select", function (e) {
            console.log(e.params.data);
        });
    });


</script>

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

            <div class="col-md-12">
                <?= Html::dropDownList('school_name', '', [], ['id' => 'school', 'style' => 'width:100%']); ?>
            </div> <div class="col-md-12">
            <?
            echo Typeahead::widget([
                'name' => 'major_name',
                'options' => ['placeholder' => 'Search Major 搜索专业...'],
                'pluginOptions' => ['highlight' => true, 'hint' => false],
                'dataset' => [
                    [
                        'remote' => Url::to(['schools/find-majors']) . '?q=%QUERY',
                        'limit' => 1000
                    ]
                ],

            ]);

            ?> </div>
            <? //= $form->field($model, 'expiration_date')->radioList(Job::$expirationTimes); ?>
            <?= $form->field($model, 'gender')->radioList(Student::$gender) ?>
            <?= $form->field($model, 'gender')->radioList(Student::$majorLevel) ?>
            <?= $form->field($model, 'student_name') ?>
            <?= $form->field($model, 'school_id') ?>
            <?= $form->field($model, 'major_id') ?>
            <? //= $form->field($model, 'gender') ?>
            <?= $form->field($model, 'finish_year') ?>
            <? //= $form->field($model, 'major_level') ?>

            <div id="fine-uploader">
            </div>

            <script type="text/template" id="qq-template">
                <div class="qq-uploader-selector qq-uploader" qq-drop-area-text="Drop files here">
                    <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                             class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
                    </div>
                    <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                        <span class="qq-upload-drop-area-text-selector"></span>
                    </div>
                    <div class="qq-upload-button-selector qq-upload-button">
                        <div>Upload a file</div>
                    </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
                    <ul class="qq-upload-list-selector qq-upload-list" aria-live="polite"
                        aria-relevant="additions removals">
                        <li>
                            <div class="qq-progress-bar-container-selector">
                                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                     class="qq-progress-bar-selector qq-progress-bar"></div>
                            </div>
                            <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                            <img class="qq-thumbnail-selector" qq-max-size="100" qq-server-scale>
                            <span class="qq-upload-file-selector qq-upload-file"></span>
                            <span class="qq-edit-filename-icon-selector qq-edit-filename-icon"
                                  aria-label="Edit filename"></span>
                            <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                            <span class="qq-upload-size-selector qq-upload-size"></span>
                            <button type="button" class="qq-btn qq-upload-cancel-selector qq-upload-cancel">Cancel
                            </button>
                            <button type="button" class="qq-btn qq-upload-retry-selector qq-upload-retry">Retry</button>
                            <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">Delete
                            </button>
                            <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                        </li>
                    </ul>

                    <dialog class="qq-alert-dialog-selector">
                        <div class="qq-dialog-message-selector"></div>
                        <div class="qq-dialog-buttons">
                            <button type="button" class="qq-cancel-button-selector">Close</button>
                        </div>
                    </dialog>

                    <dialog class="qq-confirm-dialog-selector">
                        <div class="qq-dialog-message-selector"></div>
                        <div class="qq-dialog-buttons">
                            <button type="button" class="qq-cancel-button-selector">No</button>
                            <button type="button" class="qq-ok-button-selector">Yes</button>
                        </div>
                    </dialog>

                    <dialog class="qq-prompt-dialog-selector">
                        <div class="qq-dialog-message-selector"></div>
                        <input type="text">

                        <div class="qq-dialog-buttons">
                            <button type="button" class="qq-cancel-button-selector">Cancel</button>
                            <button type="button" class="qq-ok-button-selector">Ok</button>
                        </div>
                    </dialog>
                </div>
            </script>


            <div class="form-group">
                <?= Html::submitButton('Create Profile', ['class' => 'btn btn-primary', 'name' => 'student-signup-button']) ?>

            </div>


            <?php $form = ActiveForm::end() ?>
        </div>

    </div>

</div>


</div>