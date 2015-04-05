<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $fname
 * @property string $lname
 * @property string $contact_no
 * @property string $username
 * @property string $company_name
 * @property string $company_description
 * @property string $shipping_address
 * @property string $auth_key
 * @property integer $role
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Order[] $orders
 * @property Product[] $products
 * @property Promotion[] $promotions
 * @property Report[] $reports
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fname', 'lname', 'contact_no', 'username', 'company_name', 'shipping_address', 'auth_key', 'role', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['role', 'status', 'created_at', 'updated_at'], 'integer'],
            [['fname', 'lname', 'contact_no'], 'string', 'max' => 45],
            [['username', 'company_name', 'company_description', 'shipping_address', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fname' => 'First name',
            'lname' => 'Last name',
            'contact_no' => 'Contact No',
            'username' => 'Username',
            'company_name' => 'Company Name',
            'company_description' => 'Company Description',
            'shipping_address' => 'Shipping Address',
            'auth_key' => 'Auth Key',
            'role' => 'Role',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPromotions()
    {
        return $this->hasMany(Promotion::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Report::className(), ['user_id' => 'id']);
    }
}
