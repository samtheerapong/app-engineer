<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\engineer\models\MachineTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Machine Types');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="machine-type-index">
    <p>
        <?= Html::a(Yii::t('app', 'Create Machine Type'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'machine_type_code',
            'machine_type_name',
            'machine_type_details:ntext',
            'machine_type_color',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
