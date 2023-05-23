<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\MachineItem;

/**
 * MachineItemSearch represents the model behind the search form of `app\modules\engineer\models\MachineItem`.
 */
class MachineItemSearch extends MachineItem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['machine_id', 'item_id'], 'integer'],
            [['quantity', 'total_price'], 'number'],
            [['remask'], 'safe'],
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
        $query = MachineItem::find();

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
            'machine_id' => $this->machine_id,
            'item_id' => $this->item_id,
            'quantity' => $this->quantity,
            'total_price' => $this->total_price,
        ]);

        $query->andFilterWhere(['like', 'remask', $this->remask]);

        return $dataProvider;
    }
}
