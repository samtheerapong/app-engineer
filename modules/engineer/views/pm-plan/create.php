<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\PmPlan */

$this->title = Yii::t('app', 'Create Pm Plan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pm Plans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pm-plan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
