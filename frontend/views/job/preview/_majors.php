<div class="widget-box widget-color-red">
    <div class="widget-header">
        <h4 class="widget-title lighter smaller">Majors Selected</h4>
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
            <th>Name</th>



        </tr>
        </thead>

        <tbody>
        <? foreach ($majors as $major) { ?>
            <tr>
                <td class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace"/>
                        <span class="lbl"></span>
                    </label>
                </td>

                <td>
                    <?= $major->major_name; ?>
                </td>


            </tr>
        <? } ?>

        </tbody>
    </table>
</div>
