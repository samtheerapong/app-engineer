<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\AutoNumber */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auto-number-form">

    <p>
        <?= Html::a(Yii::t('app', 'Back'), ['index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <div class="actions-form">
        <div class="box box-success box-solid">
            <div class="box-header">
                <div class="box-title"><?= $this->title ?></div>
            </div>
            <div class="box-body">
                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
                <div class="row">
                    <div class="col-md-3">
                        <?= $form->field($model, 'group')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $form->field($model, 'number')->textInput() ?>
                    </div>
                    <div class="col-md-3">
                        <?= $form->field($model, 'optimistic_lock')->textInput() ?>
                    </div>
                    <div class="col-md-3">
                        <?= $form->field($model, 'update_time')->textInput() ?>
                    </div>
                </div>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>