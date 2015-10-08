<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "school_major".
 *
 * @property integer $school_major_id
 * @property integer $school_id
 * @property integer $major_id
 * @property string $time_created
 * @property string $time_updated
 * @property integer $number_of_male_studenttead
 * @property string $major_level
 */
class SchoolMajor extends \yii\db\ActiveRecord
{// diplo
    public static $levels = [
        'diploma' => "专科",
        'bachelor' => '本科',
        'master' => '硕士',
        //'phd' => '博士'
    ];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_major';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id', 'major_id', 'number_of_male_student'], 'integer'],
            [['time_created', 'time_updated'], 'safe'],
            [['major_level'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_major_id' => 'School Major ID',
            'school_id' => 'School ID',
            'major_id' => 'Major ID',
            'time_created' => 'Time Created',
            'time_updated' => 'Time Updated',
            'number_of_male_student' => 'Number Of Male Student',
            'major_level' => 'Major Level',
        ];
    }

    public function getMajors()
    {
        return $this->hasMany(Major::className(), ['major_id' => 'major_id']);
    }

    public function getSchools()
    {
        return $this->hasMany(School::className(), ['school_id' => 'school_id']);
    }
}
