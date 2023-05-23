<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\Station */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="station-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'station_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'station_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'station_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'station_color')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
