<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "pm_plan".
 *
 * @property int $id
 * @property int $week_id
 * @property int $month_id
 * @property int $year_id
 * @property float|null $pm_value
 *
 * @property MaintenancePlan[] $maintenancePlans
 * @property Maintenance[] $maintenances
 * @property Month $month
 * @property Week $week
 * @property Year $year
 */
class PmPlan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pm_plan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['week_id', 'month_id', 'year_id'], 'required'],
            [['week_id', 'month_id', 'year_id'], 'integer'],
            [['pm_value'], 'number'],
            [['month_id'], 'exist', 'skipOnError' => true, 'targetClass' => Month::className(), 'targetAttribute' => ['month_id' => 'id']],
            [['week_id'], 'exist', 'skipOnError' => true, 'targetClass' => Week::className(), 'targetAttribute' => ['week_id' => 'id']],
            [['year_id'], 'exist', 'skipOnError' => true, 'targetClass' => Year::className(), 'targetAttribute' => ['year_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'week_id' => Yii::t('app', 'Week ID'),
            'month_id' => Yii::t('app', 'Month ID'),
            'year_id' => Yii::t('app', 'Year ID'),
            'pm_value' => Yii::t('app', 'Pm Value'),
        ];
    }

    /**
     * Gets query for [[MaintenancePlans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaintenancePlans()
    {
        return $this->hasMany(MaintenancePlan::className(), ['pm_plan_id' => 'id']);
    }

    /**
     * Gets query for [[Maintenances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaintenances()
    {
        return $this->hasMany(Maintenance::className(), ['id' => 'maintenance_id'])->viaTable('maintenance_plan', ['pm_plan_id' => 'id']);
    }

    /**
     * Gets query for [[Month]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMonth()
    {
        return $this->hasOne(Month::className(), ['id' => 'month_id']);
    }

    /**
     * Gets query for [[Week]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWeek()
    {
        return $this->hasOne(Week::className(), ['id' => 'week_id']);
    }

    /**
     * Gets query for [[Year]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getYear()
    {
        return $this->hasOne(Year::className(), ['id' => 'year_id']);
    }
}
