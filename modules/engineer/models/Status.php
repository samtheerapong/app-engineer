<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property int $id
 * @property string|null $status_code
 * @property string|null $status_name
 * @property string|null $status_details
 * @property string|null $status_color
 *
 * @property Repair[] $repairs
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_details'], 'string'],
            [['status_code', 'status_color'], 'string', 'max' => 45],
            [['status_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'status_code' => Yii::t('app', 'Status Code'),
            'status_name' => Yii::t('app', 'Status Name'),
            'status_details' => Yii::t('app', 'Status Details'),
            'status_color' => Yii::t('app', 'Status Color'),
        ];
    }

    /**
     * Gets query for [[Repairs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepairs()
    {
        return $this->hasMany(Repair::className(), ['status_id' => 'id']);
    }
}
