<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\RepairSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repair-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'repair_number') ?>

    <?= $form->field($model, 'requester_by') ?>

    <?= $form->field($model, 'requester_at') ?>

    <?= $form->field($model, 'to_department_id') ?>

    <?php // echo $form->field($model, 'repair_type_id') ?>

    <?php // echo $form->field($model, 'machine_id') ?>

    <?php // echo $form->field($model, 'from_department_id') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'priority_id') ?>

    <?php // echo $form->field($model, 'expected_date') ?>

    <?php // echo $form->field($model, 'photos') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
