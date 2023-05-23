<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "machine_item".
 *
 * @property int $machine_id
 * @property int $item_id
 * @property float|null $quantity
 * @property float|null $total_price
 * @property string|null $remask
 *
 * @property Item $item
 * @property Machine $machine
 */
class MachineItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'machine_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['machine_id', 'item_id'], 'required'],
            [['machine_id', 'item_id'], 'integer'],
            [['quantity', 'total_price'], 'number'],
            [['remask'], 'string'],
            [['machine_id', 'item_id'], 'unique', 'targetAttribute' => ['machine_id', 'item_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'id']],
            [['machine_id'], 'exist', 'skipOnError' => true, 'targetClass' => Machine::className(), 'targetAttribute' => ['machine_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'machine_id' => Yii::t('app', 'Machine ID'),
            'item_id' => Yii::t('app', 'Item ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'total_price' => Yii::t('app', 'Total Price'),
            'remask' => Yii::t('app', 'Remask'),
        ];
    }

    /**
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['id' => 'item_id']);
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
}
