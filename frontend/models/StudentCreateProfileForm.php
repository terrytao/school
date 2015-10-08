<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/6/15
 * Time: 8:10 PM
 */

namespace frontend\models;


use yii\base\Model;
use frontend\models\Student;
use Yii;

class StudentCreateProfileForm extends Model{


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
    public $born_year;
    public $profile_photo;
    public $profile_qq;
    public $profile_email;
    public $profile_wechat;
    public $profile_introduction;
    public $profile_more_me;


//    public static $gender = [
//        'Male' => 'Male',
//        'Female'=>'Female',
//    ];
//
//    public static $major_level =[
//        'diploma'=> 'Diploma',
//        'bachelor' => 'Bachelor',
//        'master'=>'Master',
//        'phd'=>'PhD/PostDoc'
//    ];

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
                   // 'gender'=>$this::$gender,
                    'student_degree',
                    'degree_level',
                    'user_id',
                    'born_year',
                  //  'major_level'=>$this::$major_level,
                    'profile_photo',
                    'profile_qq',
                    'profile_email',
                    'profile_wechat',
                    'profile_introduction',
                     'profile_more_me',
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

    public function createProfile()
    {

        // if ($this->validate()){



        $student = New Student();

       // $student = Student::find()->where(['user_id'=>Yii::$app->user->getId()])->one();



        $student->major_id = $this->major_id;
        $student->school_id = $this->school_id;
        $student->student_name = $this->student_name;
        $student->user_id = Yii::$app->user->getId();

        $student->gender = $this->gender;

        $student->finish_year = $this->finish_year;

        $student->major_level = $this->major_level;



         $student->save();




        return null;
    }

}