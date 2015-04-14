<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\OrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>




    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'username') ?>

    <!--<?= $form->field($model, 'product_id') ?> -->

    <?php 
        $products=Product::find()->all();

        $listData=ArrayHelper::map($products,'id','name');

        echo $form->field($model, 'product_id')->dropDownList(
                                $listData, 
                                ['prompt'=>'Select Product...']);
    ?>


    <?= $form->field($model, 'qty') ?>

    <?= $form->field($model, 'id') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
