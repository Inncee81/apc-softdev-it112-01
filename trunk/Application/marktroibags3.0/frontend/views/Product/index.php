<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\user;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
           // [
              //'attribute'=>'user_id',
             // 'value'=>'user.username',
          //  ],

            
         //   'id',
            'name',
            'description',

            ['class' => 'yii\grid\ActionColumn2'],
        ],
    ]); ?>

</div>
