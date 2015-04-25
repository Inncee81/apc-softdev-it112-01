<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Report;
use backend\models\ReportSearch;
use common\models\User;
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

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'status',
            'order_id',
            'order.product.name',
            'order.qty',
            'order.date',
          
            'username',
            
        ],
    ]) ?>

</div>
