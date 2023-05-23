<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\MachineItem */

$this->title = Yii::t('app', 'Create Machine Item');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Machine Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="machine-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
