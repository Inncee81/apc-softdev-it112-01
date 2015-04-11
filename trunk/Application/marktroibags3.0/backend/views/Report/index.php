<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Product;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'order Status';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Report', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'status',
            
            [
              'attribute'=>'user_id',
              'value'=>'user.username',
            ],
            
            'order.qty',
            [
              'attribute'=>'order_id',
              'value'=>'order.date',
            ],
            
            'username',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
