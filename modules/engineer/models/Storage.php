<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "storage".
 *
 * @property int $id
 * @property string|null $storage_area
 * @property string|null $storage_shelf
 *
 * @property Item[] $items
 */
class Storage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'storage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['storage_area', 'storage_shelf'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'storage_area' => Yii::t('app', 'Storage Area'),
            'storage_shelf' => Yii::t('app', 'Storage Shelf'),
        ];
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['storage_id' => 'id']);
    }
}
