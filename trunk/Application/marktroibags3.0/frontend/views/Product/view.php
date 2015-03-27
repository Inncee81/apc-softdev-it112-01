<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Product;
use frontend\models\ProductSearch;

use yii\grid\GridView;
use common\models\user;

/* @var $this yii\web\View */
/* @var $model frontend\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
           
            'name',
            'description',
           
        ],
        
    ]) ?>
    <?= $ImageName = $model->name; ?>
    <?= Html::a('View Product','uploads/'.$ImageName.'.png') ?>

    
</div>
