<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\Machine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="machine-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'machine_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'machine_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'machine_en_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'machine_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'machine_type_id')->textInput() ?>

    <?= $form->field($model, 'repair_id')->textInput() ?>

    <?= $form->field($model, 'serial_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'po_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'installation_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'docs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'photos')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'machine_status_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
