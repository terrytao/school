<?php

namespace common\models;

use backend\models\School;
use frontend\models\SchoolMajorStudent;
use frontend\models\StudentMajorStudent;
use Yii;

/**
 * This is the model class for table "school_major".
 *
 * @property integer $school_major_id
 * @property integer $school_id
 * @property integer $major_id
 * @property string $time_created
 * @property string $time_updated
 * @property integer $number_of_male_student
 * @property School $school
 */
class SchoolMajor extends \yii\db\ActiveRecord
{



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
            [['time_created', 'time_updated',], 'safe'],
            [['school_id', 'major_id'], 'required'],
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
        ];
    }


    public function afterFind()
    {
        // after finding records, format the time_updated property to display in m-d-Y
        if ($this->time_updated) {
            $this->time_updated = \DateTime::createFromFormat("Y-m-d H:i:s", $this->time_updated)
                ->format("m-d-Y");
        }
        return parent::afterFind();
    }

    public function afterSave($insert, $changedAttribute)
    {
        $schoolMajor = SchoolMajor::find()
            ->where(['school_id' => $this->school_id])
            ->count();
        $school = School::find()
            ->where(['school_id' => $this->school_id])
            ->one();
        $school->number_of_major = $schoolMajor;
        $school->save(false);

        $schoolCount = SchoolMajor::find()
            ->where(['major_id' => $this->major_id])
            ->count();
        $major = Major::find()
            ->where(['major_id' => $this->major_id])
            ->one();
        $major->number_of_school = $schoolCount;
        $major->save(false);

        return parent::afterSave($insert, $changedAttribute);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchool()
    {
        return $this->hasOne(School::className(), ['school_id' => 'school_id']);
    }

    public function getMajor()
    {
        return $this->hasOne(Major::className(), ['major_id' => 'major_id']);
    }

    public function getSchools()
    {
        return $this->hasMany(School::className(), ['school_id' => 'school_id']);
    }

    public function getSchoolMajorStudents()
    {
        return $this->hasMany(SchoolMajorStudent::className(), ['major_id' => 'major_id']);
    }
}
