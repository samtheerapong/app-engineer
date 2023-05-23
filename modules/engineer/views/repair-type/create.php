<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\RepairType */

$this->title = Yii::t('app', 'Create Repair Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Repair Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repair-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
