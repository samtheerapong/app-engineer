<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\MaintenancePlan */

$this->title = Yii::t('app', 'Update Maintenance Plan: {name}', [
    'name' => $model->maintenance_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Maintenance Plans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->maintenance_id, 'url' => ['view', 'maintenance_id' => $model->maintenance_id, 'pm_plan_id' => $model->pm_plan_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="maintenance-plan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
