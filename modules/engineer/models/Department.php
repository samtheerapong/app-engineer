<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string|null $department_code
 * @property string|null $department_name
 * @property string|null $department_details
 * @property string|null $department_color
 *
 * @property Repair[] $repairs
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_details'], 'string'],
            [['department_code', 'department_color'], 'string', 'max' => 45],
            [['department_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'department_code' => Yii::t('app', 'Department Code'),
            'department_name' => Yii::t('app', 'Department Name'),
            'department_details' => Yii::t('app', 'Department Details'),
            'department_color' => Yii::t('app', 'Department Color'),
        ];
    }

    /**
     * Gets query for [[Repairs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepairs()
    {
        return $this->hasMany(Repair::className(), ['department_id' => 'id']);
    }
}
