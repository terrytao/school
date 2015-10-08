<?php

namespace frontend\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "student".
 *
 * @property integer $student_id
 * @property integer $school_id
 * @property integer $major_id
 * @property integer $school_major_id
 * @property string $student_name
 * @property string $school_name
 * @property string $major_name
 * @property string $student_degree
 * @property string $gender
 * @property string $finish_year
 * @property string $major_level
 * @property integer $user_id
 * @property string $created_time
 * @property integer $born_year
 * @property string profile_photo
 * @property string profile_introduction
 * @property string profile_email
 * @property string $profile_qq
 * @property string $profile_wechat
 * @property string $profile_more_me
 * @property string $profile_image
 *
 * @property Resume[] $resumes
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static $gender = [
        'M' => 'Male',
        'F' => 'Female',
    ];

    public static $majorLevel = [
        'diploma' => 'Diploma',
        'bachelor' => 'Bachelor',
        'master' => 'Master',
        'phd' => 'PhD/PostDoc'
    ];


    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id', 'user_id', 'born_year'], 'integer'],
            [['created_time'], 'safe'],
            [['student_name'], 'string', 'max' => 20],
            [['school_name', 'major_name'], 'string', 'max' => 80],
            [['student_degree', 'major_level'], 'string', 'max' => 10],
            [['gender'], 'string', 'max' => 10],
            [['finish_year'], 'string', 'max' => 4],
            [['profile_photo', 'profile_introduction', 'profile_email', 'profile_qq', 'profile_wechat', 'profile_more_me'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'school_id' => 'School ID',
            'major_id' => 'Major ID',
            'school_major_id' => 'School Major ID',
            'student_name' => 'Student Name',
            'school_name' => 'School Name',
            'major_name' => 'Major Name',
            'student_degree' => 'Student Degree',
            'gender' => 'Gender',
            'finish_year' => 'Finish Year',
            'major_level' => 'Major Level',
            'user_id' => 'User ID',
            'created_time' => 'Created Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResumes()
    {
        return $this->hasMany(Resume::className(), ['student_id' => 'student_id']);
    }

    public function getPostedJobs()
    {

        return $this->hasMany(JobPosting::className(), ['student_id' => 'student_id']);
    }

    public function createProfile()
    {

    }

    public function getSchool()
    {
        return $this->hasOne(School::className(), ['school_id' => 'school_id']);
    }

    public function getSchoolMajorStudents()
    {
        return $this->hasMany(SchoolMajorStudent::className(), ['student_id' => 'student_id']);
    }

    public function getImageDirectory()
    {
        if (!is_dir('uploads')) {
            mkdir('uploads');
        }
        if (!is_dir('uploads/profile')) {
            mkdir('uploads/profile');
        }
//        echo $this->student_id;
//        echo is_dir('uploads/profile/' . $this->student_id);die;
        if (!is_dir('uploads/profile/' . $this->student_id)) {
            mkdir('uploads/profile/' . $this->student_id);
        }
        return 'uploads/profile/' . $this->student_id;
    }

    public function getImageElement()
    {
        return Html::img($this->getImageDirectory() . '/' . $this->profile_image, ['alt' => 'profile_image']);
    }
}
