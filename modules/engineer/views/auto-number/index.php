<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\engineer\models\AutoNumberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Auto Numbers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-number-index">

    <div style="display: flex; justify-content: space-between;">
        <p style="text-align: left;">
            <?= Html::a('<i class="fas fa-plus"></i> ' . Yii::t('app', Yii::t('app', 'Create')), ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fas fa-refresh"></i> ' . Yii::t('app', ''), [''], ['class' => 'btn btn-danger', 'id' => 'refresh-btn']) ?>
        </p>
        <p style="text-align: right;">
            <?= Html::a(Yii::t('app', 'Home') . ' <i class="fas fa-arrow-circle-right"></i> ', ['index'], ['class' => 'btn btn-warning']) ?>
        </p>
    </div>
    <div class="actions-form">
        <div class="box box-info box-solid">
            <div class="box-header">
                <div class="box-title"><?= $this->title ?></div>
            </div>
            <div class="box-body">

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'group',
                        'number',
                        'optimistic_lock',
                        'update_time:datetime',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>


            </div>