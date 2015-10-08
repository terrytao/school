<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

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
 */
class Student extends ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['school_id', 'major_id', 'school_major_id'], 'integer'],
            [['student_name'], 'string', 'max' => 20],
            [['school_name', 'major_name'], 'string', 'max' => 80],
            [['student_degree'], 'string', 'max' => 10]
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
        ];
    }

    // this is how we create relationships with other models
    public function getSchool()
    {
        return $this->hasOne(School::className(), ['school_id' => 'school_id']);
    }

}
