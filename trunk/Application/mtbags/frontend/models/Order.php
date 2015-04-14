<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $user_id
 * @property string $username
 * @property integer $product_id
 * @property string $qty
 * @property integer $id
 * @property string $date
 * @property string $Status
 *
 * @property User $user
 * @property Product $product
 * @property Report[] $reports
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'username', 'product_id', 'qty', 'date', 'Status'], 'required'],
            [['user_id', 'product_id'], 'integer'],
            [['username', 'qty', 'date'], 'string', 'max' => 45],
            [['Status'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'username' => 'Username',
            'product_id' => 'Product ID',
            'qty' => 'Qty',
            'id' => 'ID',
            'date' => 'Date(MM-DD-YYYY)',
            'Status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Report::className(), ['order_id' => 'id']);
    }
}
