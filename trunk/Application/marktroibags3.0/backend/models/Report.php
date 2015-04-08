<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property integer $id
 * @property string $status
 * @property integer $order_id
 * @property integer $user_id
 *
 * @property Order $order
 * @property User $user
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'report';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'order_id', 'user_id'], 'required'],
            [['order_id', 'user_id'], 'integer'],
            [['status','username'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'order_id' => 'Order ID',
            'user_id' => 'User ID',
            'order.product.name' => 'Product Name'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    
    
}
