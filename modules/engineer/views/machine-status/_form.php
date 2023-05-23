<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\MachineStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="machine-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'machine_status_code')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
