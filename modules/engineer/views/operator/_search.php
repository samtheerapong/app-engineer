<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\OperatorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="operator-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'repair_id') ?>

    <?= $form->field($model, 'operator_by') ?>

    <?= $form->field($model, 'operator_at') ?>

    <?= $form->field($model, 'started_at') ?>

    <?php // echo $form->field($model, 'finished_at') ?>

    <?php // echo $form->field($model, 'cause_solution') ?>

    <?php // echo $form->field($model, 'photos') ?>

    <?php // echo $form->field($model, 'items') ?>

    <?php // echo $form->field($model, 'repair_cost') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
