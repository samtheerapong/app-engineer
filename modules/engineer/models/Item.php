<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $id
 * @property string|null $item_code
 * @property string|null $item_name
 * @property string|null $item_sn
 * @property float|null $quantity
 * @property int|null $counting_unit_id
 * @property string|null $po_number
 * @property string|null $receipt_at
 * @property string|null $photos
 * @property int|null $warehouse_id
 * @property int|null $storage_id
 *
 * @property CountingUnit $countingUnit
 * @property Storage $storage
 * @property Warehouse $warehouse
 * @property MachineItem[] $machineItems
 * @property Machine[] $machines
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity'], 'number'],
            [['counting_unit_id', 'warehouse_id', 'storage_id'], 'integer'],
            [['photos'], 'string'],
            [['item_code', 'item_name', 'item_sn', 'po_number', 'receipt_at'], 'string', 'max' => 45],
            [['counting_unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => CountingUnit::className(), 'targetAttribute' => ['counting_unit_id' => 'id']],
            [['storage_id'], 'exist', 'skipOnError' => true, 'targetClass' => Storage::className(), 'targetAttribute' => ['storage_id' => 'id']],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'item_code' => Yii::t('app', 'Item Code'),
            'item_name' => Yii::t('app', 'Item Name'),
            'item_sn' => Yii::t('app', 'Item Sn'),
            'quantity' => Yii::t('app', 'Quantity'),
            'counting_unit_id' => Yii::t('app', 'Counting Unit ID'),
            'po_number' => Yii::t('app', 'Po Number'),
            'receipt_at' => Yii::t('app', 'Receipt At'),
            'photos' => Yii::t('app', 'Photos'),
            'warehouse_id' => Yii::t('app', 'Warehouse ID'),
            'storage_id' => Yii::t('app', 'Storage ID'),
        ];
    }

    /**
     * Gets query for [[CountingUnit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountingUnit()
    {
        return $this->hasOne(CountingUnit::className(), ['id' => 'counting_unit_id']);
    }

    /**
     * Gets query for [[Storage]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStorage()
    {
        return $this->hasOne(Storage::className(), ['id' => 'storage_id']);
    }

    /**
     * Gets query for [[Warehouse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouse()
    {
        return $this->hasOne(Warehouse::className(), ['id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[MachineItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMachineItems()
    {
        return $this->hasMany(MachineItem::className(), ['item_id' => 'id']);
    }

    /**
     * Gets query for [[Machines]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMachines()
    {
        return $this->hasMany(Machine::className(), ['id' => 'machine_id'])->viaTable('machine_item', ['item_id' => 'id']);
    }
}
