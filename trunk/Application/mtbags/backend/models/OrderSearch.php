<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Order;

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
            [['user_id', 'product_id', 'id'], 'integer'],
            [['username', 'qty', 'date', 'Status'], 'safe'],
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
        //$uid = Yii::$app->user->identity->id;
        $query = Order::find();//->where(['id' => $uid])->all();

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
            'id' => $this->id,
        ]);


        $query->andFilterWhere(['username' => $this->username])
            ->andFilterWhere(['like', 'qty', $this->qty])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'Status', $this->Status]);

        return $dataProvider;
    }
}
