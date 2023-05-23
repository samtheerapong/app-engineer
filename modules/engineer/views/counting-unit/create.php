<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\CountingUnit */

$this->title = Yii::t('app', 'Create Counting Unit');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Counting Units'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="counting-unit-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
