<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "school_major_student".
 *
 * @property string $school_major_student_id
 * @property string $school_id
 * @property integer $major_id
 * @property string $student_id
 * @property string $time_created
 * @property string $time_updated
 */
class StudentMajorStudent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_major_student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id', 'student_id'], 'required'],
            [['school_id', 'major_id', 'student_id'], 'integer'],
            [['time_created', 'time_updated'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_major_student_id' => 'School Major Student ID',
            'school_id' => 'School ID',
            'major_id' => 'Major ID',
            'student_id' => 'Student ID',
            'time_created' => 'Time Created',
            'time_updated' => 'Time Updated',
        ];
    }
}
