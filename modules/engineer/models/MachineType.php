<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "machine_type".
 *
 * @property int $id
 * @property string|null $machine_type_code
 * @property string|null $machine_type_name
 * @property string|null $machine_type_details
 * @property string|null $machine_type_color
 *
 * @property Machine[] $machines
 */
class MachineType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'machine_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['machine_type_details'], 'string'],
            [['machine_type_code', 'machine_type_color'], 'string', 'max' => 45],
            [['machine_type_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'machine_type_code' => Yii::t('app', 'Machine Type Code'),
            'machine_type_name' => Yii::t('app', 'Machine Type Name'),
            'machine_type_details' => Yii::t('app', 'Machine Type Details'),
            'machine_type_color' => Yii::t('app', 'Machine Type Color'),
        ];
    }

    /**
     * Gets query for [[Machines]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMachines()
    {
        return $this->hasMany(Machine::className(), ['machine_type_id' => 'id']);
    }
}
