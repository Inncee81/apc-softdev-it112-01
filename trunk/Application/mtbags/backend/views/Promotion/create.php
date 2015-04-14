<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Promotion */

$this->title = 'Create Promotion';
$this->params['breadcrumbs'][] = ['label' => 'Promotions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promotion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
