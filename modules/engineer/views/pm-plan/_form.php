<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\PmPlan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pm-plan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'week_id')->textInput() ?>

    <?= $form->field($model, 'month_id')->textInput() ?>

    <?= $form->field($model, 'year_id')->textInput() ?>

    <?= $form->field($model, 'pm_value')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
