<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\engineer\models\AutoNumber */

$this->title = $model->group;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Auto Numbers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="auto-number-view">
    <p>
        <?= Html::a('<i class="fas fa-chevron-left"></i> ' . Yii::t('app', 'Back'), ['index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fas fa-edit"></i> ' . Yii::t('app', 'Update'), ['update', 'id' => $model->group], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('<i class="fas fa-trash"></i> ' . Yii::t('app', 'Delete'), ['delete', 'id' => $model->group], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="actions-form">
        <div class="box box-info box-solid">
            <div class="box-header">
                <div class="box-title"><?= $this->title ?></div>
            </div>
            <div class="box-body">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'group',
                        'number',
                        'optimistic_lock',
                        'update_time:datetime',
                    ],
                ]) ?>

            </div>
        </div>
    </div>
</div>