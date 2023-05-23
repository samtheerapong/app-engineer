<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "warehouse".
 *
 * @property int $id
 * @property string|null $warehouse_code
 * @property string|null $warehouse_name
 *
 * @property Item[] $items
 */
class Warehouse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'warehouse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['warehouse_code'], 'string', 'max' => 45],
            [['warehouse_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'warehouse_code' => Yii::t('app', 'Warehouse Code'),
            'warehouse_name' => Yii::t('app', 'Warehouse Name'),
        ];
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['warehouse_id' => 'id']);
    }
}
