<?php

namespace frontend\models;

use Yii;
use common\models\User;
use frontend\models\Product;

/**
 * This is the model class for table "order".
 *
 * @property integer $user_id
 * @property integer $product_id
 * @property integer $promotion_id
 * @property integer $id
 * @property string $date
 * @property string $status
 *
 * @property User $user
 * @property Product $product
 * @property Promotion $promotion
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
            [['user_id', 'product_id', 'date',], 'required'],
            [['user_id', 'product_id'], 'integer'],
            [['date','qty','username','shippingaddress','specification'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User',
            'product_id' => 'Product',
            'User.username' => 'User',
            'product.name' => 'Product',
            'id' => 'ID',
            'shippingaddress' => 'Shipping Address',
            'date' => 'Date(MM-DD-YYYY)',
            
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
    public function getUsername()
    {
        return $this->hasOne(Username::className(), ['id' => 'username']);
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Report::className(), ['order_id' => 'id']);
    }
}
