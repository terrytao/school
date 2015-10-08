<?php
/**
 *
 */
use yii\widgets\LinkPager;

?>

<?
/**
 * @var $schoolMajor frontend\models\School
 * @var $request yii\web\Request
 */
use yii\helpers\Html; ?>


<table class="table">
    <thead>
    <tr>
        <th>Student Name</th>

    </tr>
    </thead>
    <tbody>
    <?


    foreach ($students as $student) {
        ?>

        <tr>

            <td>
                <?= $student->student_name; ?>
            </td>

        </tr>

        <?
    }
    ?>
    </tbody>
</table>





<?

/*echo LinkPager::widget([
    'pagination' => $pagination,
]);*/
?>
