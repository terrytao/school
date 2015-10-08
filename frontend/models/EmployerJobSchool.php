<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 8/12/15
 * Time: 7:49 AM
 */

namespace frontend\models;

use Yii;


class EmployerJobSchool extends \Yii\db\ActiveRecord
{

    public static function tableName()
    {

        return 'employer_job_school';

    }

    public function rules()
    {
        return [
            [['employer_id'], 'required'],
            [['employer_id'], 'integer'],
            [['time_created', 'time_updated', 'job', 'school', 'major', 'employer_id'], 'safe'],
            [['job'], 'string', 'max' => 2000],
            [['school'], 'string', 'max' => 2000],
            [['major'], 'string', 'max' => 2000],
        ];
    }

    public function attributeLabels()
    {
        return [
            'employer_id' => 'Employer ID',
            'job' => 'Jobs',
            'school' => 'Schools',
            'major' => 'Majors',
            'time_created' => 'Time Created',
            'time_updated' => 'Time Updated',

        ];
    }

}