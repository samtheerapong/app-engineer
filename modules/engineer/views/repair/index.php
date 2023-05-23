<?php

use app\modules\engineer\models\Repair;
use app\modules\engineer\models\Status;
use app\modules\engineer\models\User;
use kartik\widgets\Select2;
use yii\helpers\Html;
// use yii\grid\GridView;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\engineer\models\RepairSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Repairs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repair-index">

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

                        // 'id',
                        'repair_number',
                        'requester_at:date',
                        [
                            'attribute' => 'to_department_id',
                            'options' => ['style' => 'width:150px'],
                            'contentOptions' => ['class' => 'text-center'], // จัดตรงกลาง
                            'format' => 'html',
                            'value' => function ($model) {
                                return  $model->toDepartment->department_name;
                            },
                            'filter' => Select2::widget([
                                'model' => $searchModel,
                                'attribute' => 'to_department_id',
                                'data' => ArrayHelper::map(Repair::find()->all(), 'to_department_id', 'toDepartment.department_name'),
                                'theme' => Select2::THEME_DEFAULT,
                                'options' => ['placeholder' => Yii::t('app', 'Select...')],
                                'language' => 'th',
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ])
                        ],
                        // 'requester_by',
                        [
                            'attribute' => 'requester_by',
                            'format' => 'html',
                            'options' => ['style' => 'width:160px'],
                            'value' => 'requesterBy.profile.name',
                            'filter' => Select2::widget([
                                'model' => $searchModel,
                                'attribute' => 'requester_by',
                                'data' => ArrayHelper::map(Repair::find()->all(), 'requester_by', 'requesterBy.profile.name'),
                                'theme' => Select2::THEME_DEFAULT,
                                'options' => ['placeholder' => Yii::t('app', 'Select...')],
                                'language' => 'th',
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ])
                        ],
                        
                        // 'to_department_id',
                       
                        //'repair_type_id',
                        //'machine_id',
                        // 'from_department_id',
                        [
                            'attribute' => 'from_department_id',
                            'options' => ['style' => 'width:150px'],
                            'contentOptions' => ['class' => 'text-center'], // จัดตรงกลาง
                            'format' => 'html',
                            'value' => function ($model) {
                                return  $model->fromDepartment->department_name;
                            },
                            'filter' => Select2::widget([
                                'model' => $searchModel,
                                'attribute' => 'from_department_id',
                                'data' => ArrayHelper::map(Repair::find()->all(), 'from_department_id', 'fromDepartment.department_name'),
                                'theme' => Select2::THEME_DEFAULT,
                                'options' => ['placeholder' => Yii::t('app', 'Select...')],
                                'language' => 'th',
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ])
                        ],
                        'title',
                        //'description:ntext',
                        // 'priority_id',
                        [
                            'attribute' => 'priority_id',
                            'format' => 'html',
                            'options' => ['style' => 'width:160px'],
                            // 'value' => 'priority.priority_name',
                            'value' => function ($model) {
                                return '<span class="badge" style="background-color:' . $model->priority->priority_color . ';"><b>' . $model->priority->priority_name . '</b></span>';
                            },
                            'filter' => Select2::widget([
                                'model' => $searchModel,
                                'attribute' => 'priority_id',
                                'data' => ArrayHelper::map(Repair::find()->all(), 'priority_id', 'priority.priority_name'),
                                'theme' => Select2::THEME_DEFAULT,
                                'options' => ['placeholder' => Yii::t('app', 'Select...')],
                                'language' => 'th',
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ])
                        ],
                        'expected_date:date',
                        //'photos:ntext',
                        //'status_id',
                        [
                            'attribute' => 'status_id',
                            'options' => ['style' => 'width:120px'],
                            'contentOptions' => ['class' => 'text-center'], // จัดตรงกลาง
                            'format' => 'html',
                            'value' => function ($model) {
                                $blinkClass = $model->status->id == 1 ? 'blink' : '';
                                return '<span class="badge ' . $blinkClass . '" style="background-color:' . $model->status->status_color . ';"><b>' . $model->status->status_name . '</b></span>';
                            },
                            // 'filter' => Html::activeDropDownList( $searchModel,'status_id', ArrayHelper::map(Status::find()->all(), 'id', 'status_details'),['class' => 'form-control', 'prompt' => Yii::t('app', 'Select...')]),
                            'filter' => Select2::widget([
                                'model' => $searchModel,
                                'attribute' => 'status_id',
                                'data' => ArrayHelper::map(Status::find()->all(), 'id', 'status_name'),
                                'theme' => Select2::THEME_DEFAULT,
                                'options' => ['placeholder' => Yii::t('app', 'Select...')],
                                'language' => 'th',
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ])
                        ],

                        [
                            'class' => 'kartik\grid\ActionColumn',
                            'options' => ['style' => 'width:150px'],
                            'buttonOptions' => ['class' => 'btn btn-default'],
                            'template' => '<div class="btn-group btn-group-sm text-center" role="group"> {view} {update} {delete}</div>',
                            'buttons' => [
                                'view' => function ($url, $model, $key) {
                                    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                        'title' => Yii::t('app', 'View'),
                                        'class' => 'btn btn-info',
                                    ]);
                                },
                                'update' => function ($url, $model, $key) {

                                    return Html::a('<span class="glyphicon glyphicon-edit"></span>', $url, [
                                        'title' => Yii::t('app', 'Approver'),
                                        'class' => 'btn btn-warning',
                                    ]);
                                },
                                'delete' => function ($url, $model, $key) {

                                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                        'title' => Yii::t('app', 'Delete'),
                                        'class' => 'btn btn-danger',
                                        'data' => [
                                            'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                            'method' => 'post',
                                        ],
                                    ]);
                                },

                            ],
                        ],
                    ],
                ]); ?>


            </div>
        </div>
    </div>
</div>