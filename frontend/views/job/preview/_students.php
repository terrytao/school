<div class="widget-box widget-color-pink">
    <div class="widget-header">
        <h4 class="widget-title lighter smaller">Students Selected</h4>
    </div>
    <table id="simple-table" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th class="center">
                <label class="pos-rel">
                    <input type="checkbox" class="ace"/>
                    <span class="lbl"></span>
                </label>
            </th>
            <th>Student Name</th>

            <th>School Name</th>
            <th>School Province</th>
            <th>Major Name</th>
        </tr>
        </thead>

        <tbody>
        <? foreach ($students as $student) { ?>
            <tr>
                <td class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace"/>
                        <span class="lbl"></span>
                    </label>
                </td>

                <td>
                    <?= $student->student_name; ?>
                </td>

                <td>
                    <?= $student->school->school_name; ?>
                </td>
                <td>
                    <?= $student->school->school_province; ?>
                </td>
                <td>
                    <? foreach ($student->schoolMajorStudents as $schoolMajorStudent) {
                        ?>
                        <?=$schoolMajorStudent->major->major_name;?>,
                        <?
                    } ?>
                </td>

            </tr>
        <? } ?>
        </tbody>
    </table>
</div>