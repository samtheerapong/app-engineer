<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\engineer\models\OperatorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Operators');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operator-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Operator'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'repair_id',
            'operator_by',
            'operator_at',
            'started_at',
            //'finished_at',
            //'cause_solution:ntext',
            //'photos:ntext',
            //'items:ntext',
            //'repair_cost',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
