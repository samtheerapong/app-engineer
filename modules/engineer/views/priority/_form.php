<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\Priority */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="priority-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'priority_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'priority_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'priority_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'priority_color')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
