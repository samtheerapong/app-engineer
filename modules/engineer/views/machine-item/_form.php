<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\MachineItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="machine-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'machine_id')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'total_price')->textInput() ?>

    <?= $form->field($model, 'remask')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
