<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Order;
use frontend\models\OrderSearch;

use common\models\user;
use frontend\models\Product;

/* @var $this yii\web\View */
/* @var $model frontend\models\Order */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_id'=>'user.username',
            'product_id'=>'product.name',
            'qty',
            'product2'=>'product.name',
            'qty2',
            'product3'=>'product.name',
            'qty3',
            'id',
            'shippingaddress',
            'date',
           
            
        ],
    ]) ?>

</div>
