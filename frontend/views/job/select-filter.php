<?
use yii\helpers\Html;

/**
 * @var $this yii\web\View
 */
?>
<?= $this->render('partials/selected-data');
?>
<?= Html::beginForm(); ?>
    <p><?= Html::submitButton('Chose a major, publish to schools', ['class' => 'btn   btn-primary']) ?></p>
<?= Html::hiddenInput('filterType', 'publishToSchools'); ?>
<?= Html::endForm(); ?>



<?= Html::beginForm(); ?>
    <p><?= Html::submitButton('Chose a school, publish to majors', ['class' => 'btn   btn-danger']) ?></p>
<?= Html::hiddenInput('filterType', 'publishToMajors'); ?>
<?= Html::endForm(); ?>



<?= Html::beginForm(); ?>

    <p><?= Html::submitButton('Chose a major, publish to students', ['class' => 'btn   btn-success']) ?></p>
<?= Html::hiddenInput('filterType', 'publishToStudents'); ?>
<?= Html::endForm(); ?>