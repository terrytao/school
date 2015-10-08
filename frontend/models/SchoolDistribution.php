<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "school_distribution".
 *
 * @property integer $school_distribution_id
 * @property string $school_province
 * @property integer $number_of_school
 * @property string $percentage
 */
class SchoolDistribution extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_distribution';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number_of_school'], 'integer'],
            [['percentage'], 'number'],
            [['school_province'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_distribution_id' => 'School Distribution ID',
            'school_province' => 'School Province',
            'number_of_school' => 'Number Of School',
            'percentage' => 'Percentage',
        ];
    }
}
