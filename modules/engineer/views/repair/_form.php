<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\Repair */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repair-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'repair_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requester_by')->textInput() ?>

    <?= $form->field($model, 'requester_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_department_id')->textInput() ?>

    <?= $form->field($model, 'repair_type_id')->textInput() ?>

    <?= $form->field($model, 'machine_id')->textInput() ?>

    <?= $form->field($model, 'from_department_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'priority_id')->textInput() ?>

    <?= $form->field($model, 'expected_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photos')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
