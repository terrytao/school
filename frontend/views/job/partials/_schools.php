<?

use yii\helpers\Html;

?>

<div class="pull-left">
    <?= Html::beginForm(); ?>
    <?= Html::submitButton('publish to all schools', [
        'class' => 'btn   btn-primary',
        'id' => 'publishToSchoolsBtn'
    ]) ?>
    <?= Html::hiddenInput('filterType', 'publishToSchools'); ?>
    <?= Html::endForm(); ?></div>
<div class="clearfix"></div>

<table id="simple-table" class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <th class="center">
            <label class="pos-rel">
                <input type="checkbox" id="checkAllSchools"/>
                <span class="lbl"></span>
            </label>
        </th>
        <th><span class="badge badge-danger"><?= count($schoolMajors); ?></span> 学校
        </th>

        <th>Students</th>
        <th>省</th>
        <th>City</th>
        <th class="hidden-480">Action</th>


    </tr>
    </thead>

    <tbody>
    <?


    foreach ($schoolMajors as $schoolMajor) {
        ?>

        <? foreach ($schoolMajor->schools as $school) { ?>

            <tr>
                <td><input type="checkbox" rec="<?= $school->school_id; ?>" value="<?= $school->school_id; ?>"
                           class="selectSchools" name="schoolCheckbox[]"/></td>

                <td>
                    <?= $school->school_name; ?>
                </td>

                <td>
                    <label class="pos-rel">
                        <input type="checkbox" name="selectStudentSchools[]" value="<?= $school->school_id; ?>"
                               class="selectSchoolStudents">
                        <span class="lbl"></span>
                    </label>
                   <span class="badge badge-danger"><?= $school->number_of_student; ?>
                </td>
                <td>
                    <?= $school->school_province; ?>
                </td>
                <td>
                    <?= $school->school_city; ?>
                </td>
                <td>
                    <?= Html::a('发布', '#'); ?>
                </td>
            </tr>
            <?
        } ?>

        <?
    }
    ?>
    </tbody>
</table>
<div class="pull-left">
    <?= Html::beginForm(); ?>
    <?= Html::submitButton('publish to all schools', [
        'class' => 'btn   btn-primary',
        'id' => 'publishToSchoolsBtn'
    ]) ?>
    <?= Html::hiddenInput('filterType', 'publishToSchools'); ?>
    <?= Html::endForm(); ?></div>

