<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Product;
use backend\models\ProductSearch;

use yii\grid\GridView;
use common\models\user;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

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
            'user_id',
            'id',
            'name',
            'description',
            'logo',
        ],
        
    ]) ?>
    <?= $ImageName = $model->name; ?>
    <?= Html::a('View Product','uploads/'.$ImageName.'.png') ?>

    
</div>
