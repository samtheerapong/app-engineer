<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\MaintenancePlan */

$this->title = $model->maintenance_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Maintenance Plans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="maintenance-plan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'maintenance_id' => $model->maintenance_id, 'pm_plan_id' => $model->pm_plan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'maintenance_id' => $model->maintenance_id, 'pm_plan_id' => $model->pm_plan_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'maintenance_id',
            'pm_plan_id',
        ],
    ]) ?>

</div>
