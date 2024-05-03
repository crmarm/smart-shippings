<?php
namespace app\models;

use Yii;
use yii\base\Model;

class LoginForm extends Model
{
    public $email;
    public $password;
    private $_user = false;

    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
//            ['rememberMe', 'boolean'],
            ['password', 'validatePassword'],
//            ['company_hvhh', 'validateCompanyHvhh'],
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect email or password.');
            }
        }
    }

    public function validateCompanyHvhh($attribute, $params)
    {
//        if (!$this->hasErrors()) {
//            $user = $this->getUser();
//            if (!$user || !$user->validatePassword($this->password)) {
//                $this->addError($attribute, 'Incorrect email or password.');
//            }
//        }
    }

    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->email);
        }

        return $this->_user;
    }

    public function login()
    {
        if ($this->validate()) {
//            echo '<pre>';
//            var_dump(Yii::$app->user);
//            var_dump($this->getUser());
//            die;
            return Yii::$app->user->login($this->getUser(), 3600*24*30);
        } else {
            return false;
        }
    }
}
