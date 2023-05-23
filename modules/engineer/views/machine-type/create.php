<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\MachineType */

$this->title = Yii::t('app', 'Create Machine Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Machine Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="machine-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
