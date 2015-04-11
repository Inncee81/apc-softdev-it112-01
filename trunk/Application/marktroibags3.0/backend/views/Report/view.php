<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Report;
use backend\models\ReportSearch;
use common\models\user;
use backend\models\Order;
use backend\models\OrderSearch;
use backend\models\Product;
use backend\models\ProductSearch;

/* @var $this yii\web\View */
/* @var $model backend\models\Report */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        
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
            'id',
            
            'order_id',
            'order.product.name',
            'order.qty',
            'order.date',
          
            'username',
            
        ],
    ]) ?>

</div>
