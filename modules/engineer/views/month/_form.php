<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\Month */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="month-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'month_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'month_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'month_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'month_color')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
