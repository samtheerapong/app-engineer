<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "year".
 *
 * @property int $id
 * @property string|null $year_code
 * @property string|null $year_name
 * @property string|null $year_details
 * @property string|null $year_color
 *
 * @property Maintenance[] $maintenances
 */
class Year extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'year';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year_details'], 'string'],
            [['year_code', 'year_name', 'year_color'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'year_code' => Yii::t('app', 'Year Code'),
            'year_name' => Yii::t('app', 'Year Name'),
            'year_details' => Yii::t('app', 'Year Details'),
            'year_color' => Yii::t('app', 'Year Color'),
        ];
    }

    /**
     * Gets query for [[Maintenances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaintenances()
    {
        return $this->hasMany(Maintenance::className(), ['year_id' => 'id']);
    }
}
