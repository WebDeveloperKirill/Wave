<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class SignupForm extends Model
{
    public $surname;
    public $username;
    public $patronomik;
    public $email;
    public $password;
    public $rememberMe = true;





    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['surname','username','patronomik','email', 'password'], 'required'],
            // rememberMe must be a boolean value
        ];
    }
    public function attributeLabels()
    {
        return [
            'surname' => 'Фамилия',
            'username' => 'Имя',
            'patronomik' => 'Отчество',
            'email' => 'Почта',
            'password' => 'Пароль',
            'rememberMe' => 'Согласие на обработку персональных данных',
        ];
    }
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        $user = new User();
        $user->surname = $this->surname;
        $user->username = $this->username;
        $user->patronomik = $this->patronomik;
        $user->email = $this->email;
        $user->password = $this->password;


        return $user->save() ? $user: null;
    }

}
