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


            <th>School Name</th>
            <th>School Province</th>

        </tr>
        </thead>

        <tbody>
        <? foreach ($schools as $school) { ?>
            <tr>
                <td class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace"/>
                        <span class="lbl"></span>
                    </label>
                </td>

                <td>
                    <?= $school->school_name; ?>
                </td>

                <td>
                    <?= $school->school_province; ?>
                </td>


            </tr>
        <? } ?>
        </tbody>
    </table>
</div>