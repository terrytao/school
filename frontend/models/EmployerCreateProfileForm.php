<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/8/15
 * Time: 11:07 AM
 */

namespace frontend\models;


use yii\base\Model;

class EmployerCreateProfileForm extends Model
{
    public $employer_name;
    public $employer_description;
    public $time_created;
    public $time_updated;

    public function rules()
    {
        return [
            [
                [
                    'employer_name',
                    'employer_description',
                    'time_created',
                    'time_updated'
                ],
                'safe'
            ],


        ];
    }

    public function EmployerCreateProfile()
    {
        $employer = New Employer();

    }


}



