<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\ItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'item_code') ?>

    <?= $form->field($model, 'item_name') ?>

    <?= $form->field($model, 'item_sn') ?>

    <?= $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'counting_unit_id') ?>

    <?php // echo $form->field($model, 'po_number') ?>

    <?php // echo $form->field($model, 'receipt_at') ?>

    <?php // echo $form->field($model, 'photos') ?>

    <?php // echo $form->field($model, 'warehouse_id') ?>

    <?php // echo $form->field($model, 'storage_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
