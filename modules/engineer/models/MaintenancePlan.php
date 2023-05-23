<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "maintenance_plan".
 *
 * @property int $maintenance_id
 * @property int $pm_plan_id
 *
 * @property Maintenance $maintenance
 * @property PmPlan $pmPlan
 */
class MaintenancePlan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maintenance_plan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['maintenance_id', 'pm_plan_id'], 'required'],
            [['maintenance_id', 'pm_plan_id'], 'integer'],
            [['maintenance_id', 'pm_plan_id'], 'unique', 'targetAttribute' => ['maintenance_id', 'pm_plan_id']],
            [['maintenance_id'], 'exist', 'skipOnError' => true, 'targetClass' => Maintenance::className(), 'targetAttribute' => ['maintenance_id' => 'id']],
            [['pm_plan_id'], 'exist', 'skipOnError' => true, 'targetClass' => PmPlan::className(), 'targetAttribute' => ['pm_plan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'maintenance_id' => Yii::t('app', 'Maintenance ID'),
            'pm_plan_id' => Yii::t('app', 'Pm Plan ID'),
        ];
    }

    /**
     * Gets query for [[Maintenance]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaintenance()
    {
        return $this->hasOne(Maintenance::className(), ['id' => 'maintenance_id']);
    }

    /**
     * Gets query for [[PmPlan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPmPlan()
    {
        return $this->hasOne(PmPlan::className(), ['id' => 'pm_plan_id']);
    }
}
