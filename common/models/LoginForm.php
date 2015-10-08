<?php
namespace common\models;

use frontend\models\Employer;
use frontend\models\Student;
use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = false;

    private $_user = false;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            $user = $this->getUser();

            $login = Yii::$app->user->login($user, $this->rememberMe ? 3600 * 24 * 30 : 0);


            if ($login) {
                // Set the sessions
                $this->setEmployerOrStudentSessions($user);

                return $login;
            }
        } else {
            return false;
        }
    }

    /**
     * Sets session variables for either a student or employer
     * @param User $user
     */
    private function setEmployerOrStudentSessions(User $user)
    {
        // check if the user is an employer
        $employer = Employer::find()->where(['user_id' => $user->id])->one();
        $student = Student::find()->where(['user_id'=>$user->id])->one();

        if ($employer) {
            // if so set the employerId to a session
            \Yii::$app->session->set('employerId', $employer->employer_id);
        } elseif ($student){ // check if the user is an student

            if ($student) {
                // if so set the studentId to a session

                \Yii::$app->session->set('studentId', $student->student_id);
                \Yii::$app->session->set('studentMajorId', $student->major_id);
                \Yii::$app->session->set('studentSchoolId',$student->school_id);
            }
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
