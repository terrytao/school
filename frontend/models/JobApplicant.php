<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/19/15
 * Time: 8:14 PM
 */

namespace frontend\models;


use yii\db\ActiveRecord;
use yii;

class JobApplicant extends ActiveRecord
{
    public static function tableName()
    {

        return "job_applicant";
    }

    public function rules()
    {
        return [

            [['job_posting_id', 'student_id'], 'integer'],

        ];
    }

    public function attributeLabels()
    {
        return [
            'job_applicant_id' => 'Job Applicant Id',
            'job_posting_id' => 'Job Posting Id',
            'student_id' => 'Student_id'
        ];
    }

    public function getJobPosting()
    {
        return $this->hasOne(JobPosting::className(), ['job_posting_id' => 'job_posting_id']);
    }
}