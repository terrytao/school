<?php
/**
 * Created by PhpStorm.
 * User: kdp
 * Date: 8/14/15
 * Time: 1:06 AM
 */
namespace frontend\components\job;

use frontend\models\JobApplicant;
use frontend\models\JobPosting;
use frontend\models\JobPostingSave;

class ApplyToJob
{
    public function submitApplications($jobPostingIds, $studentId)
    {
        if ($this->canApply($jobPostingIds, $studentId)) {
            foreach ($jobPostingIds as $jobPostingId) {
                $jobApplicant = new JobApplicant();
                $jobApplicant->job_posting_id = $jobPostingId;
                $jobApplicant->student_id = $studentId;
                $jobApplicant->job_application_status_text = "Applied on " . date("Y-m-d");
               echo $jobApplicant->save();
            }
        }
    }

    public function saveApplications($jobPostingIds, $studentId)
    {
        if ($this->canApply($jobPostingIds, $studentId)) {
            foreach ($jobPostingIds as $jobPostingId) {
                $jobPostingSave = new JobPostingSave();
                $jobPostingSave->job_id = $jobPostingId;
                $jobPostingSave->student_id = $studentId;

                echo $jobPostingSave->save();
            }
        }
    }


    public function canApply($jobPostingIds, $studentId)
    {
        $jobPostingQuery = JobPosting::find()->where(['IN', 'job_posting_id', $jobPostingIds])
            ->andWhere(['student_id' => $studentId]);
        // echo $jobPostingQuery->createCommand()->getRawSql();
        return $jobPostingQuery->count("*");

    }
}