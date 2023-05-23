<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "machine_status".
 *
 * @property int $id
 * @property string|null $machine_status_code
 *
 * @property Machine[] $machines
 */
class MachineStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'machine_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['machine_status_code'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'machine_status_code' => Yii::t('app', 'Machine Status Code'),
        ];
    }

    /**
     * Gets query for [[Machines]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMachines()
    {
        return $this->hasMany(Machine::className(), ['machine_status_id' => 'id']);
    }
}
