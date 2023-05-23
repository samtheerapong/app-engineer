<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "counting_unit".
 *
 * @property int $id
 * @property string|null $counting_unit_big
 * @property string|null $counting_unit_small
 *
 * @property Item[] $items
 */
class CountingUnit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'counting_unit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['counting_unit_big', 'counting_unit_small'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'counting_unit_big' => Yii::t('app', 'Counting Unit Big'),
            'counting_unit_small' => Yii::t('app', 'Counting Unit Small'),
        ];
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['counting_unit_id' => 'id']);
    }
}
