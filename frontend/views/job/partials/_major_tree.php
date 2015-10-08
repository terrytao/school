<?php
/**
 *
 */

use frontend\components\job\JobOptions;
use frontend\models\Major;
use yii\helpers\Html;

$majorCategories = Major::find()->distinct()->where([
    'major_level' => $session['degreeLevel']
])->groupBy('major_category')->all();
?>


<div id="demo_menu" class="">
    <ul>

        <?
        foreach ($majorCategories as $majorCategory) {


            ?>

            <li><? echo $majorCategory->major_category; ?>
                <?
                $majorSubCategories = Major::find()->where(['major_category' =>
                    $majorCategory->major_category,'major_level' => $session['degreeLevel']])->groupBy('major_sub_category')->all();
                ?>


                <ul>
                    <? foreach ($majorSubCategories as $majorSubCategory) {
                        ?>
                        <li>

                            <?= $majorSubCategory->major_sub_category;
                            ?>


                            <?
                            $majorSubSubCategories = Major::find()->where(['major_sub_category' => $majorSubCategory->major_sub_category,'major_level' => $session['degreeLevel'] ])->all();
                            ?>


                            <ul>
                                <?

                                foreach ($majorSubSubCategories as $majorSubSubCategory) { ?>
                                    <li id="major_<?= $majorSubSubCategory->major_id; ?>"
                                        class="majorItem"
                                        rec="<?= $majorSubSubCategory->major_id; ?>">
                                        <?= $majorSubSubCategory->major_name; ?></li>
                                    <?
                                }
                                ?>
                            </ul>
                        </li>

                        <?
                    } ?>

                </ul>
            </li>


        <? }

        ?>

    </ul>
</div>


<?= Html::hiddenInput('selectedMajor', '', ['id' => 'selectedMajor']); ?>



