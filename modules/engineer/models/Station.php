<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "station".
 *
 * @property int $id
 * @property string|null $station_code
 * @property string|null $station_name
 * @property string|null $station_details
 * @property string|null $station_color
 *
 * @property Machine[] $machines
 * @property Maintenance[] $maintenances
 */
class Station extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'station';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_details'], 'string'],
            [['station_code', 'station_color'], 'string', 'max' => 45],
            [['station_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'station_code' => Yii::t('app', 'Station Code'),
            'station_name' => Yii::t('app', 'Station Name'),
            'station_details' => Yii::t('app', 'Station Details'),
            'station_color' => Yii::t('app', 'Station Color'),
        ];
    }

    /**
     * Gets query for [[Machines]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMachines()
    {
        return $this->hasMany(Machine::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[Maintenances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaintenances()
    {
        return $this->hasMany(Maintenance::className(), ['station_id' => 'id']);
    }
}
