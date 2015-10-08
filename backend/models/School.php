<?php

namespace backend\models;

use common\models\SchoolMajor;
use Yii;

/**
 * This is the model class for table "school".
 *
 * @property integer $school_id
 * @property string $school_name
 * @property string $school_level
 * @property string $school_region
 * @property string $is_211
 * @property string $is_985
 * @property string $is_central
 * @property string $school_category
 * @property string $number_of_major
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id'], 'required'],
            [['school_id'], 'integer'],
            [['school_name', 'is_211'], 'string', 'max' => 100],
            [['school_level'], 'string', 'max' => 20],
            [['school_region'], 'string', 'max' => 10],
            [['number_of_major'],'safe'],
            [['is_985', 'is_central', 'school_category'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_id' => 'School ID',
            'school_name' => 'School Name',
            'school_level' => 'School Level',
            'school_region' => 'School Region',
            'is_211' => 'Is 211',
            'is_985' => 'Is 985',
            'is_central' => 'Is Central',
            'school_category' => 'School Category',
        ];
    }



    public function getStudents()
    {

        return $this->hasMany(Student::className(), ['student_id' => 'student_id']);
    }
}
