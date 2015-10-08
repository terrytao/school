<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "job_posting_save".
 *
 * @property integer $job_posting_save_id
 * @property integer $school_major_student_id
 * @property integer $employer_id
 * @property integer $job_id
 * @property string $to_school
 * @property string $to_major
 * @property string $to_student
 * @property string $time_created
 * @property string $time_updated
 * @property integer $school_id
 * @property integer $major_id
 * @property integer $student_id
 * @property string $expiration_date
 * @property string $job_type
 * @property integer $number_of_application
 */
class JobPostingSave extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'job_posting_save';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_major_student_id', 'employer_id', 'job_id', 'school_id', 'major_id', 'student_id', 'number_of_application'], 'integer'],
            [['time_created', 'time_updated', 'expiration_date'], 'safe'],
            [['to_school', 'to_major', 'to_student'], 'string', 'max' => 500],
            [['job_type'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'job_posting_save_id' => 'Job Posting Save ID',
            'school_major_student_id' => 'School Major Student ID',
            'employer_id' => 'Employer ID',
            'job_id' => 'Job ID',
            'to_school' => 'To School',
            'to_major' => 'To Major',
            'to_student' => 'To Student',
            'time_created' => 'Time Created',
            'time_updated' => 'Time Updated',
            'school_id' => 'School ID',
            'major_id' => 'Major ID',
            'student_id' => 'Student ID',
            'expiration_date' => 'Expiration Date',
            'job_type' => 'Job Type',
            'number_of_application' => 'Number Of Application',
        ];
    }
}
