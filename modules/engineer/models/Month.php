<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "month".
 *
 * @property int $id
 * @property string|null $month_code
 * @property string|null $month_name
 * @property string|null $month_details
 * @property string|null $month_color
 *
 * @property Maintenance[] $maintenances
 */
class Month extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'month';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['month_details'], 'string'],
            [['month_code', 'month_name', 'month_color'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'month_code' => Yii::t('app', 'Month Code'),
            'month_name' => Yii::t('app', 'Month Name'),
            'month_details' => Yii::t('app', 'Month Details'),
            'month_color' => Yii::t('app', 'Month Color'),
        ];
    }

    /**
     * Gets query for [[Maintenances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaintenances()
    {
        return $this->hasMany(Maintenance::className(), ['month_id' => 'id']);
    }
}
