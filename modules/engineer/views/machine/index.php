<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\engineer\models\MachineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Machines');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="machine-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Machine'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'machine_code',
            'machine_name',
            'machine_en_name',
            'machine_details:ntext',
            //'machine_type_id',
            //'repair_id',
            //'serial_number',
            //'station_id',
            //'po_number',
            //'cost',
            //'installation_date',
            //'docs:ntext',
            //'photos:ntext',
            //'machine_status_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
