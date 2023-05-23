<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\Item;

/**
 * ItemSearch represents the model behind the search form of `app\modules\engineer\models\Item`.
 */
class ItemSearch extends Item
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'counting_unit_id', 'warehouse_id', 'storage_id'], 'integer'],
            [['item_code', 'item_name', 'item_sn', 'po_number', 'receipt_at', 'photos'], 'safe'],
            [['quantity'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Item::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'quantity' => $this->quantity,
            'counting_unit_id' => $this->counting_unit_id,
            'warehouse_id' => $this->warehouse_id,
            'storage_id' => $this->storage_id,
        ]);

        $query->andFilterWhere(['like', 'item_code', $this->item_code])
            ->andFilterWhere(['like', 'item_name', $this->item_name])
            ->andFilterWhere(['like', 'item_sn', $this->item_sn])
            ->andFilterWhere(['like', 'po_number', $this->po_number])
            ->andFilterWhere(['like', 'receipt_at', $this->receipt_at])
            ->andFilterWhere(['like', 'photos', $this->photos]);

        return $dataProvider;
    }
}
