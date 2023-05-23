<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "week".
 *
 * @property int $id
 * @property string|null $week_code
 * @property string|null $week_name
 * @property string|null $week_details
 * @property string|null $week_color
 *
 * @property Maintenance[] $maintenances
 */
class Week extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'week';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['week_details'], 'string'],
            [['week_code', 'week_name', 'week_color'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'week_code' => Yii::t('app', 'Week Code'),
            'week_name' => Yii::t('app', 'Week Name'),
            'week_details' => Yii::t('app', 'Week Details'),
            'week_color' => Yii::t('app', 'Week Color'),
        ];
    }

    /**
     * Gets query for [[Maintenances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaintenances()
    {
        return $this->hasMany(Maintenance::className(), ['week_id' => 'id']);
    }
}
