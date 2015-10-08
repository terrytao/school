<?php
/**
 *
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<h2>Courses</h2>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($resumeCourse, 'content')->textarea() ?>
<div class="form-group">
    <?= Html::submitButton('Add', ['class' => $resumeCourse->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>



<?php ActiveForm::end(); ?>


