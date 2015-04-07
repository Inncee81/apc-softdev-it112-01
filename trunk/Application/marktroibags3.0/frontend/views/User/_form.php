<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => 45])->label('First Name')?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => 45])->label('Last Name') ?>

    <?= $form->field($model, 'contact_no')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'company_description')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'shipping_address')->textInput(['maxlength' => 255]) ?>


    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
