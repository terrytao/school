<?php
namespace frontend\models;

use frontend\models\User;
use yii\base\Model;
use Yii;
use frontend\models\Student;
use dektrium\user\models\RegistrationForm as BaseForm;

/**
 * Signup form
 */
class StudentSignupForm extends BaseForm
{
    public $username;
    public $email;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->user_type = 'S';
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                //return $user->login();
                return Yii::$app->user->login($user);
            }

            $student = New Student();

        }

        return null;
    }
}
