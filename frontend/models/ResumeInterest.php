<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/28/15
 * Time: 4:44 PM
 */

namespace frontend\models;

use yii\db\ActiveRecord;


class ResumeInterest extends ActiveRecord
{
    public static function tableName(){

        return 'resume_interest';
    }

    public function rules(){
        return [
            [['resume_id'], 'integer'],
            [['interest'], 'string', 'max'=>100]

        ];
    }

    public function attributeLabels()
    {
        return[

            'resume_interest_id'=> 'Resume Interest ID',
            'resume_id'=> 'Resume Id',
            'interest'=>'Interest',

        ];
    }

    public function getResume()
    {
        return $this->hasOne(Resume::className(),['resume_id'=>'resume_id']);
    }
}