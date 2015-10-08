<?php

namespace frontend\models;

use Yii;
use common\models\School;

/**
 * This is the model class for table "job_posting".
 *
 * @property integer $job_posting_id
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
 */
class JobPosting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'job_posting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'job_id'], 'safe'],
            [['school_major_student_id', 'employer_id', 'job_id', 'school_id', 'major_id', 'student_id'], 'integer'],
            [['time_created', 'time_updated'], 'safe'],
            [['to_school', 'to_major', 'to_student'], 'string', 'max' => 500]
        ];

//        return [
//            [['time_created', 'time_updated'], 'safe'],
//            [['user_id'], 'integer'],
//            [['employer_name'], 'string', 'max' => 50],
//            [['employer_description'], 'string', 'max' => 2000]
//        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'job_posting_id' => 'Job Posting ID',
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
        ];
    }



    public function getSchool()
    {
        return $this->hasOne(School::className(), ['school_id' =>'school_id']);
    }


}
