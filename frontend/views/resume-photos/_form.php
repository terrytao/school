<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResumePhoto */
/* @var $form yii\widgets\ActiveForm */
?>

<? $this->registerCssFile(Yii::$app->urlManager->baseUrl . '/js/fine-uploader/fineuploader-new.css',
    ['position' => View::POS_LOAD]); ?>

<!-- The element where Fine Uploader will exist. -->

<!-- Fine Uploader -->

<script src="<?= Yii::$app->urlManager->baseUrl . '/js/fine-uploader/fine-uploader.js'; ?>"></script>
<div class="resume-photo-form">

    <?php $form = ActiveForm::begin(); ?>




    <?= $form->field($model, 'photo_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update',
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<div id="photoImageContainer">
    <?= $model->getPhotoImg(); ?>
</div>
<?= Html::a('Delete Photo', '#', ['id' => 'deletePhoto']); ?>
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
        <ul class="qq-upload-list-selector qq-upload-list" aria-live="polite" aria-relevant="additions removals">
            <li>
                <div class="qq-progress-bar-container-selector">

                    <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                         class="qq-progress-bar-selector qq-progress-bar"></div>
                </div>
                <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                <img class="qq-thumbnail-selector" qq-max-size="100" qq-server-scale>
                <span class="qq-upload-file-selector qq-upload-file"></span>
                <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                <span class="qq-upload-size-selector qq-upload-size"></span>
                <button type="button" class="qq-btn qq-upload-cancel-selector qq-upload-cancel">Cancel</button>
                <button type="button" class="qq-btn qq-upload-retry-selector qq-upload-retry">Retry</button>
                <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">Delete</button>
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

<script>
    $(function () {
        $('body').on('click', '#deletePhoto', function () {
            $.post('<?=Yii::$app->urlManager->createUrl(['/resume-photos/delete', 'id'=>$model->resume_photo_id]);?>', function (data) {
                $('#photoImageContainer').html("");
            }, 'json')
            return false;
        })
    })
    var uploader = new qq.FineUploader({
        debug: true,
        element: document.getElementById('fine-uploader'),
        multiple: false,
        request: {
            endpoint: '<?=Yii::$app->urlManager->createUrl(['/resume-photos/upload', 'resumePhotoId'=>$model->resume_photo_id]);?>'
        },
//        deleteFile: {
//            enabled: true,
//            endpoint: '<?//=Yii::$app->urlManager->createUrl(['/resume-photos/upload', 'resumePhotoId'=>$model->resume_photo_id]);?>//'
//        },
        retry: {
            enableAuto: true
        },
        callbacks: {
            onComplete: function (id, name, responseJSON, xhr) {
                console.log(responseJSON.photoImg);
                $('#photoImageContainer').html(responseJSON.photoImg)
            }
        }

    });
</script>