<?php

namespace backend\models;

use Yii;
use common\models\user;

/**
 * This is the model class for table "product".
 *
 * @property integer $user_id
 * @property integer $id
 * @property string $name
 * @property string $description
 *
 * @property Order[] $orders
 * @property user $user
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public $file;
     
    public function rules()
    {
        return [
            [['user_id', 'id', 'name', 'description'], 'required'],
            [['user_id', 'id'], 'integer'],
            [['name', 'description','logo'], 'string', 'max' => 200],
            [['file'],'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User',
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'file' => 'Product Img'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getuser()
    {
        return $this->hasOne(user::className(), ['id' => 'user_id']);
    }
}
