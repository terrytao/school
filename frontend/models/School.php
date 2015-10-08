<?php

namespace frontend\models;

use common\models\SchoolMajor;
use common\models\JobPosting;
use Yii;

/**
 * This is the model class for table "school".
 *
 * @property integer $school_id
 * @property string $school_name
 * @property string $school_level
 * @property string $school_region
 * @property string $school_category
 * @property integer $is_211
 * @property integer $is_985
 * @property integer $is_central
 * @property integer $number_of_major
 * @property string $school_name_pinying
 * @property string $school_name_combine
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
            [['school_id', 'is_211', 'is_985', 'number_of_major'], 'integer'],
            [['school_name', 'school_name_pinying', 'school_name_combine'], 'string', 'max' => 100],
            [['school_level'], 'string', 'max' => 20],
            [['school_province','school_city'], 'string', 'max' => 20],
            [['school_category'], 'string', 'max' => 40]
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
            'school_province' => 'School Province',
            'school_city' => 'School City',
            'school_category' => 'School Category',
            'is_211' => 'Is 211',
            'is_985' => 'Is 985',
            'number_of_major' => 'Number Of Major',
            'school_name_pinying' => 'School Name Pinying',
            'school_name_combine' => 'School Name Combine',
        ];
    }

    public function getMajors()
    {
        return $this->hasMany(SchoolMajor::className(), ['school_id' => 'school_id']);
    }

    public function getJobPosting()
    {
        return $this->hasMany(JobPosting::className(), ['school_id' => 'school_id']);
    }
}
