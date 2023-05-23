<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "operator".
 *
 * @property int $id
 * @property int|null $repair_id
 * @property int|null $operator_by
 * @property string|null $operator_at
 * @property string|null $started_at
 * @property string|null $finished_at
 * @property string|null $cause_solution
 * @property string|null $photos
 * @property string|null $items
 * @property float|null $repair_cost
 *
 * @property Repair $repair
 */
class Operator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['repair_id', 'operator_by'], 'integer'],
            [['cause_solution', 'photos', 'items'], 'string'],
            [['repair_cost'], 'number'],
            [['operator_at', 'started_at', 'finished_at'], 'string', 'max' => 45],
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
            'operator_by' => Yii::t('app', 'Operator By'),
            'operator_at' => Yii::t('app', 'Operator At'),
            'started_at' => Yii::t('app', 'Started At'),
            'finished_at' => Yii::t('app', 'Finished At'),
            'cause_solution' => Yii::t('app', 'Cause Solution'),
            'photos' => Yii::t('app', 'Photos'),
            'items' => Yii::t('app', 'Items'),
            'repair_cost' => Yii::t('app', 'Repair Cost'),
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
