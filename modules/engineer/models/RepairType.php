<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "repair_type".
 *
 * @property int $id
 * @property string|null $repair_type_code
 * @property string|null $repair_type_name
 * @property string|null $repair_type_details
 * @property string|null $repair_type_color
 *
 * @property Repair[] $repairs
 */
class RepairType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'repair_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['repair_type_details'], 'string'],
            [['repair_type_code', 'repair_type_color'], 'string', 'max' => 45],
            [['repair_type_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'repair_type_code' => Yii::t('app', 'Repair Type Code'),
            'repair_type_name' => Yii::t('app', 'Repair Type Name'),
            'repair_type_details' => Yii::t('app', 'Repair Type Details'),
            'repair_type_color' => Yii::t('app', 'Repair Type Color'),
        ];
    }

    /**
     * Gets query for [[Repairs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepairs()
    {
        return $this->hasMany(Repair::className(), ['repair_type_id' => 'id']);
    }
}
