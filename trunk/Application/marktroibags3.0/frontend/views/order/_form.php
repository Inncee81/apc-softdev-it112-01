<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
use frontend\models\Product;
use yii\helpers\ArrayHelper;
use common\models\LoginForm;
use yii\base\Model;



/* @var $this yii\web\View */
/* @var $model frontend\models\Order */
/* @var $form yii\widgets\ActiveForm */


?>



<div class="order-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    

    
    <?= $form->field($model, 'username')->textInput(['value'=>Yii::$app->user->identity->username]) ?>

    <?= $form->field($model, 'product_id')->dropDownlist(
        ArrayHelper::map(product::find()->all(),'id','name'),
        ['prompt'=>'Select product']
     )?>
     <?= $form->field($model, 'qty')->textInput(['maxlength' => 45]) ?> 
     
    
     <?= $form->field($model, 'specification')->textArea() ?>   
    
    <?= $form->field($model, 'shippingaddress')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'date')->textInput(['maxlength' => 45]) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
