<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;


/* @var $this \yii\web\View */
/* @var $content string */

?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">

                    <?php

                    $menuItems = [
                        [
                            'label' => Yii::t('app', 'Home'),
                            'options' => ['class' => 'home-link'],
                            'url' => ['/site/index']
                        ],
                        [
                            'label' => '<i class="fa fa-cogs"></i>' . Yii::t('app', 'Backend'),
                            'options' => ['class' => 'approver-link'],
                            'items' => [
                                ['label' => Yii::t('app', 'AutoNumber'), 'url' => ['/engineer/auto-number/index']],
                                ['label' => Yii::t('app', 'counting-unit'), 'url' => ['/engineer/counting-unit/index']],
                                ['label' => Yii::t('app', 'department'), 'url' => ['/engineer/department/index']],
                                ['label' => Yii::t('app', 'frequency'), 'url' => ['/engineer/frequency/index']],
                                ['label' => Yii::t('app', 'item'), 'url' => ['/engineer/item/index']],
                                ['label' => Yii::t('app', 'machine'), 'url' => ['/engineer/machine/index']],
                                ['label' => Yii::t('app', 'machine-item'), 'url' => ['/engineer/machine-item/index']],
                                ['label' => Yii::t('app', 'machine-status'), 'url' => ['/engineer/machine-status/index']],
                                ['label' => Yii::t('app', 'machine-type'), 'url' => ['/engineer/machine-type/index']],
                                ['label' => Yii::t('app', 'maintenance'), 'url' => ['/engineer/maintenance/index']],
                                ['label' => Yii::t('app', 'maintenance-plan'), 'url' => ['/engineer/maintenance-plan/index']],
                                ['label' => Yii::t('app', 'manager-approve'), 'url' => ['/engineer/manager-approve/index']],
                                ['label' => Yii::t('app', 'month'), 'url' => ['/engineer/month/index']],
                                ['label' => Yii::t('app', 'operator'), 'url' => ['/engineer/operator/index']],
                                ['label' => Yii::t('app', 'pm-plan'), 'url' => ['/engineer/pm-plan/index']],
                                ['label' => Yii::t('app', 'priority'), 'url' => ['/engineer/priority/index']],
                                ['label' => Yii::t('app', 'repair'), 'url' => ['/engineer/repair/index']],
                                ['label' => Yii::t('app', 'repair-type'), 'url' => ['/engineer/repair-type/index']],
                                ['label' => Yii::t('app', 'station'), 'url' => ['/engineer/station/index']],
                                ['label' => Yii::t('app', 'status'), 'url' => ['/engineer/status/index']],
                                ['label' => Yii::t('app', 'storage'), 'url' => ['/engineer/storage/index']],
                                ['label' => Yii::t('app', 'warehouse'), 'url' => ['/engineer/warehouse/index']],
                                ['label' => Yii::t('app', 'week'), 'url' => ['/engineer/week/index']],
                                ['label' => Yii::t('app', 'year'), 'url' => ['/engineer/year/index']],
                            ]
                        ],
                       

                        [
                            'label' => 'สมัครสมาชิก',
                            'url' => ['/user/registration/register'],
                            'options' => ['class' => 'register-link'],
                            'visible' => Yii::$app->user->isGuest,
                        ],

                        Yii::$app->user->isGuest ?
                            ['label' => 'เข้าสู่ระบบ', 'url' => ['/user/security/login'], 'options' => ['class' => 'sign-in-link'],] :
                            [
                                'label' => '<i class="fa fa-child"></i> สวัสดี!! (' . Yii::$app->user->identity->profile->name . ')',
                                'options' => ['class' => 'sign-in-link'],
                                'items' => [
                                    ['label' => '<i class="fa fa-file"></i>' . Yii::t('app', 'Private Document'), 'url' => ['/operator/private-requester/index']],
                                    ['label' => '<i class="fa fa-id-card"></i> โปรไฟล์', 'url' => ['/user/settings/profile']],
                                    ['label' => '<i class="fa fa-vcard"></i> บัญชี', 'url' => ['/user/settings/account']],
                                    ['label' => '<i class="fa fa-book"></i> จัดการสิทธิ์', 'url' => ['/admin']],
                                    ['label' => '<i class="fa fa-users"></i> จัดการผู้ใช้งาน', 'url' => ['/user/admin/index']],
                                    
                                    [
                                        'label' => '<i class="fa fa-sign-out"></i> ออกจากระบบ',
                                        'url' => ['/user/security/logout'],

                                        'linkOptions' => [
                                            'data-method' => 'post',
                                            // 'class' => 'btn btn-block'
                                        ]
                                    ],

                                ]
                            ],
                    ];
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav'],
                        'encodeLabels' => false, // ใช้งาน icon
                        'items' => $menuItems,

                    ]);
                    ?>

                </li>

            </ul>

        </div>
    </nav>
</header>