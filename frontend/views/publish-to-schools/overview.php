<?

?>
<?
use yii\helpers\Html;

$session = Yii::$app->session->get('createJob');
?>
<h2>Overview</h2>

<?= Html::a('Back', ['publish-to-schools/select-major']); ?>
<table class="table">
    <tr>
        <td>
            <b>Jobs</b>

        </td>
        <td>
            <?= $session['jobs']; ?>
        </td>
    </tr>
    <tr>
        <td><b>Degree Level</b>

        </td>
        <td>
            <?= $session['degreeLevel']; ?>      <?= Html::a('Go Back', ['job/select-level']); ?>
        </td>
    </tr>
    <tr>
        <td>
            <b>Filter Type</b>

        </td>
        <td>
            <?= $session['filterType']; ?>      <?= Html::a('Go Back', ['job/select-filter']); ?>
        </td>
    </tr>
    <tr>
        <td>
            <b>Schools</b>

        </td>
        <td>

            <? foreach ($schools as $school) { ?>
                <?= $school->school_name; ?><br>
            <? } ?>
        </td>
    </tr>
</table>


