<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/3/15
 * Time: 11:57 AM
 */
namespace backend\models;
use Yii;
use yii\base\Model;

class FieldTestForm extends Model
{

    public $username;
    public $password;
    public $email;
    public $description;
    public $uploadFile;
    public $population;
    public $name;
    public $gender;

    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
           // ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            //['password', 'validatePassword'],
        ];
    }





}