<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\ManagerApproveSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manager-approve-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'repair_id') ?>

    <?= $form->field($model, 'manager_by') ?>

    <?= $form->field($model, 'approve_at') ?>

    <?= $form->field($model, 'repair_machine_repair_id') ?>

    <?php // echo $form->field($model, 'repair_machine_machine_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
