<?php
/**
 *
 */
use frontend\assets\DataTableAsset;
use yii\widgets\LinkPager;


DataTableAsset::register($this);
?>

<?
/**
 * @var $schoolMajor frontend\models\School
 * @var $request yii\web\Request
 */
use yii\helpers\Html; ?>


<?= Html::a('No Provinces', '#noProvinces', ['id' => 'noProvinces']);; ?>

<h3>School Selected <?=$school->school_name;?></h3>
<table class="table" id="schoolMajorTable">
    <thead>
    <tr>
        <th>Major Name</th>

    </tr>
    </thead>
    <tbody>
    <?
    foreach ($schoolMajors as $schoolMajor) {
        ?>
        <? foreach ($schoolMajor->majors as $major) { ?>
            <tr>

                <td>
                    <?= $major->major_name; ?>
                </td>

            </tr>
        <?
        } ?>
        <?
    }
    ?>
    </tbody>
</table>

<?= Html::a('Post to All Schools', '#', ['class' => 'btn btn-primary']); ?>




<?

/*echo LinkPager::widget([
    'pagination' => $pagination,
]);*/
?>
