<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "promotion".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $date
 * @property string $avail
 * @property integer $user_id
 *
 * @property Order[] $orders
 * @property User $user
 */
class Promotion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'promotion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'description', 'date', 'avail', 'user_id'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['name', 'date'], 'string', 'max' => 45],
            [['description', 'avail'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'date' => 'Date',
            'avail' => 'Avail',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['promotion_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
