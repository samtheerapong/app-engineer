<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "priority".
 *
 * @property int $id
 * @property string|null $priority_code
 * @property string|null $priority_name
 * @property string|null $priority_details
 * @property string|null $priority_color
 *
 * @property Repair[] $repairs
 */
class Priority extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'priority';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['priority_details'], 'string'],
            [['priority_code', 'priority_color'], 'string', 'max' => 45],
            [['priority_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'priority_code' => Yii::t('app', 'Priority Code'),
            'priority_name' => Yii::t('app', 'Priority Name'),
            'priority_details' => Yii::t('app', 'Priority Details'),
            'priority_color' => Yii::t('app', 'Priority Color'),
        ];
    }

    /**
     * Gets query for [[Repairs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepairs()
    {
        return $this->hasMany(Repair::className(), ['priority_id' => 'id']);
    }
}
