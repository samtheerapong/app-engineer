<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\Week */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="week-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'week_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'week_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'week_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'week_color')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
