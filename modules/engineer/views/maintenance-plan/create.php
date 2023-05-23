<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\MaintenancePlan */

$this->title = Yii::t('app', 'Create Maintenance Plan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Maintenance Plans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maintenance-plan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
