<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "resume".
 *
 * @property string $resume_id
 * @property integer $student_id
 * @property string $time_created
 * @property string $resume_content
 * @property string $updated_time
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $email
 * @property string $phone
 * @property string $self_introduction
 * @property string $resume_title
 *
 * @property Student $student
 * @property ResumeCourse[] $resumeCourses
 * @property ResumePhoto[] $resumePhotos
 *
 */
class Resume extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resume';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['time_created', 'updated_time','resume_slug'], 'safe'],
            [['self_introduction'], 'string'],
            [['resume_content'], 'string', 'max' => 2000],
            [['first_name', 'last_name', 'address', 'city', 'state', 'zip', 'email'], 'string', 'max' => 200],
            [['phone','resume_title'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'resume_id' => 'Resume ID',
            'student_id' => 'Student ID',
            'time_created' => 'Time Created',
            'resume_content' => 'Resume Content',
            'updated_time' => 'Updated Time',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'email' => 'Email',
            'phone' => 'Phone',
            'self_introduction' => 'Self Introduction',
            'resume_title'=>'Title'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['student_id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumeCourses()
    {
        return $this->hasMany(ResumeCourse::className(), ['resume_id' => 'resume_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumePhotos()
    {
        return $this->hasMany(ResumePhoto::className(), ['resume_id' => 'resume_id']);
    }

    public function getResumeInterests()
    {
        return $this->hasMany(ResumeInterest::className(),['resume_id'=>'resume_id']);
    }
}
