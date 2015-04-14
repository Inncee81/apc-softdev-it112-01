<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
	public $fname;
	public $lname;
	public $contact_no;	
    public $username;
    public $email;
    public $password;
	public $company_name;
	public $company_description;
	public $shipping_address;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
		
			['fname', 'required'],
			['lname', 'required'],
			['contact_no', 'required'],

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
			
			['company_name', 'required'],
			['shipping_address', 'required'],
			
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
			$user->fname = $this->fname;
			$user->lname = $this->lname;
			$user->contact_no = $this->contact_no;
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
			$user->company_name = $this->company_name;
			$user->company_description = $this->company_description;
			$user->shipping_address = $this->shipping_address;
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
