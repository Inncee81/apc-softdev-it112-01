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
 * @property order $order
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
            [['order_id', 'user_id'], 'required'],
            [['order_id', 'user_id'], 'integer'],
            [['username'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            
            'order_id' => 'order Date',
            'user_id' => 'Customer Username',
            'order.product.name' => 'Product Name',
            
            
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getorder()
    {
        return $this->hasOne(order::className(), ['id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    
    
}
