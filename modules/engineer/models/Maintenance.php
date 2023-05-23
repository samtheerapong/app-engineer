<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "maintenance".
 *
 * @property int $id
 * @property int|null $machine_id
 * @property int|null $station_id
 * @property float|null $std_pm_time
 * @property int|null $rank
 * @property int|null $frequency_id
 *
 * @property Frequency $frequency
 * @property Machine $machine
 * @property Station $station
 * @property MaintenancePlan[] $maintenancePlans
 * @property PmPlan[] $pmPlans
 */
class Maintenance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maintenance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['machine_id', 'station_id', 'rank', 'frequency_id'], 'integer'],
            [['std_pm_time'], 'number'],
            [['frequency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Frequency::className(), 'targetAttribute' => ['frequency_id' => 'id']],
            [['machine_id'], 'exist', 'skipOnError' => true, 'targetClass' => Machine::className(), 'targetAttribute' => ['machine_id' => 'id']],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['station_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'machine_id' => Yii::t('app', 'Machine ID'),
            'station_id' => Yii::t('app', 'Station ID'),
            'std_pm_time' => Yii::t('app', 'Std Pm Time'),
            'rank' => Yii::t('app', 'Rank'),
            'frequency_id' => Yii::t('app', 'Frequency ID'),
        ];
    }

    /**
     * Gets query for [[Frequency]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFrequency()
    {
        return $this->hasOne(Frequency::className(), ['id' => 'frequency_id']);
    }

    /**
     * Gets query for [[Machine]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMachine()
    {
        return $this->hasOne(Machine::className(), ['id' => 'machine_id']);
    }

    /**
     * Gets query for [[Station]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStation()
    {
        return $this->hasOne(Station::className(), ['id' => 'station_id']);
    }

    /**
     * Gets query for [[MaintenancePlans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaintenancePlans()
    {
        return $this->hasMany(MaintenancePlan::className(), ['maintenance_id' => 'id']);
    }

    /**
     * Gets query for [[PmPlans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPmPlans()
    {
        return $this->hasMany(PmPlan::className(), ['id' => 'pm_plan_id'])->viaTable('maintenance_plan', ['maintenance_id' => 'id']);
    }
}
