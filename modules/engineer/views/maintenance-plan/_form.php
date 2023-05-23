<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\MaintenancePlan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="maintenance-plan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'maintenance_id')->textInput() ?>

    <?= $form->field($model, 'pm_plan_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
