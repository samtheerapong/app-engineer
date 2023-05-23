<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\ManagerApprove */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manager-approve-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'repair_id')->textInput() ?>

    <?= $form->field($model, 'manager_by')->textInput() ?>

    <?= $form->field($model, 'approve_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'repair_machine_repair_id')->textInput() ?>

    <?= $form->field($model, 'repair_machine_machine_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
