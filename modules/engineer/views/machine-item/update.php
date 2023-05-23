<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\MachineItem */

$this->title = Yii::t('app', 'Update Machine Item: {name}', [
    'name' => $model->machine_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Machine Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->machine_id, 'url' => ['view', 'machine_id' => $model->machine_id, 'item_id' => $model->item_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="machine-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
