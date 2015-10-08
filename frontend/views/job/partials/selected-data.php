<?

?>
<?
use yii\helpers\Html;

$session = Yii::$app->session->get('createJob');
?>

<table>
    <tr>
        <td>
            <b>Jobs</b>
            <?
            echo @$session['jobs'];
            ?>
        </td>
    </tr>
    <tr>
        <td><b>Degree Level</b>
            <?= @$session['degreeLevel']; ?>
            <?= Html::a('Go Back', ['job/select-level']); ?>
        </td>
    </tr>
    <tr>
        <td>
            <b>Filter Type</b>
            <?= @$session['filterType']; ?>
            <?= Html::a('Go Back', ['job/select-filter']); ?>
        </td>
    </tr>
</table>


