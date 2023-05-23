<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\Operator */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="operator-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'repair_id')->textInput() ?>

    <?= $form->field($model, 'operator_by')->textInput() ?>

    <?= $form->field($model, 'operator_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'started_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'finished_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cause_solution')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'photos')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'items')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'repair_cost')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
