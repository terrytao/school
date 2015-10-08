<?php
/**
 *
 */
use yii\helpers\Html;

?>

<? @$flash = Yii::$app->session->getFlash('msg');

if (isset($flash)) {
    if (is_array($flash)) {
        foreach ($flash as $msg) {
            echo $msg[0] . '<br>';
        }
    } else {
        echo $flash;
    }
}
?>
<? foreach ($activeJobs as $activeJob) { ?>
    <?
    if (in_array($activeJob->job_posting_id, $jobPostingIdsApplied)) { ?>
        Already Applied <?=$activeJob->job_posting_id;?> <br>

    <? } else { ?>
        <?= Html::a('Apply Now ' . $activeJob->job_posting_id,
            ['/job/apply', 'jobPostingId' => $activeJob->job_posting_id]); ?><br>
    <? } ?><? } ?>