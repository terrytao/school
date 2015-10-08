<h2>Invitations</h2>
<? foreach ($jobApplicants as $jobApplicant) { ?>

    <?=$jobApplicant->job_posting_id ?> - <?=\DateTime::createFromFormat("Y-m-d H:i:s", $jobApplicant->date_created)
        ->format("m-d-Y H:i:s");?>
    <br>
<? } ?>