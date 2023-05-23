<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "machine".
 *
 * @property int $id
 * @property string|null $machine_code
 * @property string|null $machine_name
 * @property string|null $machine_en_name
 * @property string|null $machine_details
 * @property int|null $machine_type_id
 * @property int|null $repair_id
 * @property string|null $serial_number
 * @property int|null $station_id
 * @property string|null $po_number
 * @property float|null $cost
 * @property string|null $installation_date
 * @property string|null $docs
 * @property string|null $photos
 * @property int|null $machine_status_id
 *
 * @property MachineStatus $machineStatus
 * @property MachineType $machineType
 * @property Repair $repair
 * @property Station $station
 * @property MachineItem[] $machineItems
 * @property Item[] $items
 * @property Maintenance[] $maintenances
 * @property Repair[] $repairs
 */
class Machine extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'machine';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['machine_details', 'docs', 'photos'], 'string'],
            [['machine_type_id', 'repair_id', 'station_id', 'machine_status_id'], 'integer'],
            [['cost'], 'number'],
            [['machine_code', 'serial_number', 'po_number', 'installation_date'], 'string', 'max' => 45],
            [['machine_name', 'machine_en_name'], 'string', 'max' => 200],
            [['machine_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => MachineStatus::className(), 'targetAttribute' => ['machine_status_id' => 'id']],
            [['machine_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => MachineType::className(), 'targetAttribute' => ['machine_type_id' => 'id']],
            [['repair_id'], 'exist', 'skipOnError' => true, 'targetClass' => Repair::className(), 'targetAttribute' => ['repair_id' => 'id']],
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
            'machine_code' => Yii::t('app', 'Machine Code'),
            'machine_name' => Yii::t('app', 'Machine Name'),
            'machine_en_name' => Yii::t('app', 'Machine En Name'),
            'machine_details' => Yii::t('app', 'Machine Details'),
            'machine_type_id' => Yii::t('app', 'Machine Type ID'),
            'repair_id' => Yii::t('app', 'Repair ID'),
            'serial_number' => Yii::t('app', 'Serial Number'),
            'station_id' => Yii::t('app', 'Station ID'),
            'po_number' => Yii::t('app', 'Po Number'),
            'cost' => Yii::t('app', 'Cost'),
            'installation_date' => Yii::t('app', 'Installation Date'),
            'docs' => Yii::t('app', 'Docs'),
            'photos' => Yii::t('app', 'Photos'),
            'machine_status_id' => Yii::t('app', 'Machine Status ID'),
        ];
    }

    /**
     * Gets query for [[MachineStatus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMachineStatus()
    {
        return $this->hasOne(MachineStatus::className(), ['id' => 'machine_status_id']);
    }

    /**
     * Gets query for [[MachineType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMachineType()
    {
        return $this->hasOne(MachineType::className(), ['id' => 'machine_type_id']);
    }

    /**
     * Gets query for [[Repair]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepair()
    {
        return $this->hasOne(Repair::className(), ['id' => 'repair_id']);
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
     * Gets query for [[MachineItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMachineItems()
    {
        return $this->hasMany(MachineItem::className(), ['machine_id' => 'id']);
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['id' => 'item_id'])->viaTable('machine_item', ['machine_id' => 'id']);
    }

    /**
     * Gets query for [[Maintenances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaintenances()
    {
        return $this->hasMany(Maintenance::className(), ['machine_id' => 'id']);
    }

    /**
     * Gets query for [[Repairs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepairs()
    {
        return $this->hasMany(Repair::className(), ['machine_id' => 'id']);
    }
}
