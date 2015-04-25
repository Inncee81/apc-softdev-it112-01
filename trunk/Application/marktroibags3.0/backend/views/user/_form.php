<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fname')->label('First Name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'lname')->label('Last Name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'contact_no')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'company_description')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'shipping_address')->textInput(['maxlength' => 255]) ?>

<!--    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'role')->textInput() ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>
-->
    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
