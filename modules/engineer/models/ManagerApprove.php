<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "manager_approve".
 *
 * @property int $id
 * @property int $repair_id
 * @property int|null $manager_by
 * @property string|null $approve_at
 * @property int|null $repair_machine_repair_id
 * @property int|null $repair_machine_machine_id
 *
 * @property Repair $repair
 */
class ManagerApprove extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'manager_approve';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'repair_id'], 'required'],
            [['id', 'repair_id', 'manager_by', 'repair_machine_repair_id', 'repair_machine_machine_id'], 'integer'],
            [['approve_at'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['repair_id'], 'exist', 'skipOnError' => true, 'targetClass' => Repair::className(), 'targetAttribute' => ['repair_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'repair_id' => Yii::t('app', 'Repair ID'),
            'manager_by' => Yii::t('app', 'Manager By'),
            'approve_at' => Yii::t('app', 'Approve At'),
            'repair_machine_repair_id' => Yii::t('app', 'Repair Machine Repair ID'),
            'repair_machine_machine_id' => Yii::t('app', 'Repair Machine Machine ID'),
        ];
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
}
