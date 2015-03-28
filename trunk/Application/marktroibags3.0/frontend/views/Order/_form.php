<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\user;
use frontend\models\Product;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'user_id')->dropDownlist(
        ArrayHelper::map(user::find()->all(),'id','username'),
        ['prompt'=>'Select user']
     )?>

    <?= $form->field($model, 'product_id')->dropDownlist(
        ArrayHelper::map(product::find()->all(),'id','name'),
        ['prompt'=>'Select product']
     )?>

    <?= $form->field($model, 'promotion_id')->textInput() ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'date')->textInput(['maxlength' => 45]) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
