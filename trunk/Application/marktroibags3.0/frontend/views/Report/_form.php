<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\LoginForm;
use yii\base\Model;
use common\models\user;
use frontend\models\Order;

/* @var $this yii\web\View */
/* @var $model backend\models\Report */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="report-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 200]) ?>

    

    <?= $form->field($model, 'order_id')->dropDownlist(
        ArrayHelper::map(order::find()->all(),'id','date','username'),
        ['prompt'=>'Select order by date']
     )?>
    
    <?= $form->field($model, 'username')->textInput(['value'=>Yii::$app->user->identity->username]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
