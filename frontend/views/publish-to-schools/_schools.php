<?
/**
 * @var $schoolMajor frontend\models\School
 * @var $request yii\web\Request
 */
use yii\helpers\Html; ?>

<?= Html::checkbox('is_211', $request->post('is211') == "1" ? 'true' : '', ['id' => 'isTwoEleven']); ?>Is 211
<?= Html::checkbox('is_985', $request->post('is985') == "1" ? 'true' : '', ['id' => 'isNineEightFive']); ?>Is 985


<?= Html::radioList('province', $request->post('province'), \yii\helpers\ArrayHelper::map($provinces, 'province', 'province'),
    ['class' => 'province',
    ]); ?>Province

<?= Html::a('No Provinces', '#noProvinces', ['id' => 'noProvinces']);; ?>
    <table class="table">
        <thead>
        <tr>
            <th>School Name</th>
            <th>Province</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?


        foreach ($schoolMajors as $schoolMajor) {
            ?>

            <? foreach ($schoolMajor->schools as $school) {
                $schoolIds[] = $school->school_id;
                ?>

                <tr>

                    <td>
                        <?= $school->school_name; ?>
                    </td>
                    <td>
                        <?= $school->school_province; ?>
                    </td>
                    <td>
                        <?= Html::a('Post to School', ['publish-to-schools/select-schools', 'schoolId' => $school->school_id]); ?>
                    </td>
                </tr>
                <?
            } ?>

            <?
        }
        ?>
        </tbody>
    </table>

<?= Html::beginForm(['select-schools'], 'post', ['id' => 'postToAllSchoolsForm']); ?>
<?= Html::a('Post to All Schools', '#', ['id' => 'postToAllSchools', 'class' => 'btn btn-primary']); ?>
<?= Html::hiddenInput('allSchools', implode(',', $schoolIds), ['id' => 'allSchools']); ?>
<?= Html::endForm(); ?>