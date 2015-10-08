<?php
namespace frontend\components;

use frontend\models\JobPosting;
use frontend\models\EmployerJobSchool;
use Yii;

class PostJobLive
{
    public function publish()
    {
        // Need to update the job status
        $session = Yii::$app->session->get('createJob');

        if ($session['type'] == 'publishToSchools') {
            // loop through jobs
            foreach ($session['jobs'] as $jobId) {

                foreach ($session['schoolIds'] as $school) {

                    foreach ($session['majorIds'] as $major) {
                        $jobPosting = new JobPosting();
                        $jobPosting->employer_id = Yii::$app->session->get('employerId');
                        $jobPosting->job_id = $jobId;
                        $jobPosting->school_id = $school;
                        // $jobPosting->student_id = '';
                        $jobPosting->major_id = $major;
                        $jobPosting->save();
                    }
                }
            }
            $this->populateJobsToSchools();

        } else if ($session['type'] == 'publishToStudents') {
            // loop through jobs
            foreach ($session['jobs'] as $jobId) {

                foreach ($session['studentIds'] as $studentId) {


                    $jobPosting = new JobPosting();
                    $jobPosting->employer_id = Yii::$app->session->get('employerId');
                    $jobPosting->job_id = $jobId;
                    $jobPosting->student_id = $studentId;
                    // $jobPosting->student_id = '';
                    //  $jobPosting->major_id = $major;
                    $jobPosting->save();
                }

            }
        }

    }


    //  2015-08-12, populate job-posted-to-schools records to a table for employers
    public function populateJobsToSchools()
    {
        $session = Yii::$app->session->get('createJob');

        $employerJobSchool = New EmployerJobSchool();

        $employerJobSchool->employer_id = Yii::$app->session->get('employerId');
        $employerJobSchool->job = implode(',', $session['jobs']);
        $employerJobSchool->school = implode(',', $session['schoolIds']);

        if (array_key_exists('majorIds', $session)) {
            $employerJobSchool->major = implode(',', $session['majorIds']);
        }
        $employerJobSchool->time_created = date("Y-m-d H:i:s");

        if ($employerJobSchool->save()) {
            $result['success'] = true;
            $result['msg'] = 'Created';
        } else {
            $result['success'] = false;
            $result['msg'] = $employerJobSchool->getErrors();
        }
        return $result;

    }
//


}