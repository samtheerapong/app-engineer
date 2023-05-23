<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\CountingUnit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="counting-unit-form">
    <p>
        <?= Html::a(Yii::t('app', 'Back'), ['index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <div class="actions-form">
        <div class="box box-success box-solid">
            <div class="box-header">
                <div class="box-title"><?= $this->title ?></div>
            </div>
            <div class="box-body">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'counting_unit_big')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'counting_unit_small')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
