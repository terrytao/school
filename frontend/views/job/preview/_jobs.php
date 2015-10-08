<div class="widget-box widget-color-green">
    <div class="widget-header">
        <h4 class="widget-title lighter smaller">Jobs Selected</h4>
    </div>

    <table id="simple-table" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th class="center">
                <label class="pos-rel">

                Name
                </label>
            </th>

            <th>

            </th>

        </tr>
        </thead>

        <tbody>
        <? foreach ($jobs as $job) { ?>
            <tr>
                <td class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace"/>
                        <span class="lbl"></span>
                    </label>
                </td>

                <td>
                    <a href="#"><?= $job->job_description; ?></a>
                </td>


            </tr>
        <? } ?>
        </tbody>
    </table>
</div>