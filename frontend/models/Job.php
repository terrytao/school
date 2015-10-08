<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "job".
 *
 * @property integer $job_id
 * @property integer $employer_id
 * @property string $time_created
 * @property string $time_updated
 * @property string $job_description
 * @property string $expiration_date
 */
class Job extends \yii\db\ActiveRecord
{
    public static $expirationTimes = [
        '1w'=>'1 Week',
        '2w'=>'2 Weeks',
        '3w'=>'2 Weeks',
        '1m'=>'1 Month',
        '2m'=>'2 Months',
    ];

    public static $job_type = [
        'fullTime'=>'Full Time',
        'partTime'=>'Part Time',
        'intern'=>'Intern',
        'hourly'=>'Hourly',
    ];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'job';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employer_id'], 'required'],
            [['employer_id'], 'integer'],
            [['time_created', 'time_updated','expiration_date'], 'safe'],
            [['job_description'], 'string', 'max' => 2000],
            [['job_type'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'job_id' => 'Job ID',
            'employer_id' => 'Employer ID',
            'time_created' => 'Time Created',
            'time_updated' => 'Time Updated',
            'job_description' => 'Job Description',
            'job_type'=>'Job Type'
        ];
    }
}
