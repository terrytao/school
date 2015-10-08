<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "employer".
 *
 * @property integer $employer_id
 * @property string $time_created
 * @property string $time_updated
 * @property integer $user_id
 * @property string $employer_name
 * @property string $employer_description
 */
class Employer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           // [['time_created', 'time_updated'], 'safe'],
           // [['user_id'], 'integer'],
            [['employer_name'], 'string', 'max' => 50],
            [['employer_description'], 'string', 'max' => 2000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employer_id' => 'Employer ID',
            'time_created' => 'Time Created',
            'time_updated' => 'Time Updated',
            'user_id' => 'User ID',
            'employer_name' => 'Employer Name',
            'employer_description' => 'Employer Description',
        ];
    }
}
