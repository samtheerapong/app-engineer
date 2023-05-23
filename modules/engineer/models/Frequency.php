<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "frequency".
 *
 * @property int $id
 * @property string|null $frequency_code
 * @property string|null $frequency_name
 * @property string|null $frequency_details
 * @property string|null $frequency_color
 *
 * @property Maintenance[] $maintenances
 */
class Frequency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'frequency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['frequency_details'], 'string'],
            [['frequency_code', 'frequency_color'], 'string', 'max' => 45],
            [['frequency_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'frequency_code' => Yii::t('app', 'Frequency Code'),
            'frequency_name' => Yii::t('app', 'Frequency Name'),
            'frequency_details' => Yii::t('app', 'Frequency Details'),
            'frequency_color' => Yii::t('app', 'Frequency Color'),
        ];
    }

    /**
     * Gets query for [[Maintenances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaintenances()
    {
        return $this->hasMany(Maintenance::className(), ['frequency_id' => 'id']);
    }
}
