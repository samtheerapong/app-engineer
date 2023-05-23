<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\RepairType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repair-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'repair_type_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'repair_type_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'repair_type_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'repair_type_color')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
