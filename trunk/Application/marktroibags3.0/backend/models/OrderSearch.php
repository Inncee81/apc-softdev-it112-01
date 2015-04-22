<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Order;
use common\models\User;
use backend\models\Product;

/**
 * OrderSearch represents the model behind the search form about `backend\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['user_id','date','product_id','qty','username','shippingaddress'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Order::find()
            ->andWhere('user_id' == Yii::$app->user->identity->username);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'user_id' => $this->user_id,
            
            'product_id' => $this->product_id,
            'qty' => $this->qty,
            'id' => $this->id,
            'shippingaddress' => $this->shippingaddress,
        ]);

       

        return $dataProvider;
    }
}
