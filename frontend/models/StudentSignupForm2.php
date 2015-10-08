<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/4/15
 * Time: 8:57 AM
 */

namespace frontend\models;


use backend\models\Student;
use common\models\User;
use yii\base\Model;
use Yii;

class StudentSignupForm extends Student
{

    public $student_name;
    public $gender;
    public $school_name;
    public $school_id;
    public $major_name;
    public $major_id;
    public $school_major_id;
    public $finish_year;
    public $major_level;
    public $student_degree;
    public $degree_level;


    public function rules()
    {

        return [
            [
                [
                    'student_name',
                    'gender',
                    'school_name',
                    'school_id',
                    'major_name',
                    'major_id',
                    'school_major_id',
                    'finish_year',
                    'major_level',
                    'student_degree',
                    'degree_level'
                ],
                'safe'
            ],
            // ['student_name', 'gender', 'school', 'major', 'required'],

        ];


        /*
                ['username', 'filter', 'filter' => 'trim'],
                    ['username', 'required'],
                    ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
                    ['username', 'string', 'min' => 2, 'max' => 255],

                    ['email', 'filter', 'filter' => 'trim'],
                    ['email', 'required'],
                    ['email', 'email'],
                    ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

                    ['password', 'required'],
                    ['password', 'string', 'min' => 6],
          */
    }

    public function signup()
    {

        // if ($this->validate()){

        // $user = New User();
        //  $user_id = $user->getId();

//        $student = New Student();
//
//        $student->major_id = $this->major_id;
//        $student->school_id = $this->school_id;
//        $student->student_name = $this->student_name;
//        // $student->user_id = $user_id;
//        $student->gender = $this->gender;
//        $student->finish_year = $this->finish_year;
//        $student->major_level = $this->major_level;
//
//        return $student->save();

        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->user_type = 'S';
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;


    }
}