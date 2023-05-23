<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\Frequency */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="frequency-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'frequency_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frequency_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frequency_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'frequency_color')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
