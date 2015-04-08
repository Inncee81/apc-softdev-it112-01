<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\user;
use frontend\models\Product;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
              'attribute'=>'user_id',
              'value'=>'user.username',
            ],
            [
              'attribute'=>'product_id',
              'value'=>'product.name',
            ],
            
            'qty',
            'date',
            'shippingaddress',
            ['class' => 'yii\grid\ActionColumn2'],
        ],
    ]); ?>

</div>
