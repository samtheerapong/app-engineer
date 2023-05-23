<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\Machine;

/**
 * MachineSearch represents the model behind the search form of `app\modules\engineer\models\Machine`.
 */
class MachineSearch extends Machine
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'machine_type_id', 'repair_id', 'station_id', 'machine_status_id'], 'integer'],
            [['machine_code', 'machine_name', 'machine_en_name', 'machine_details', 'serial_number', 'po_number', 'installation_date', 'docs', 'photos'], 'safe'],
            [['cost'], 'number'],
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
        $query = Machine::find();

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
            'machine_type_id' => $this->machine_type_id,
            'repair_id' => $this->repair_id,
            'station_id' => $this->station_id,
            'cost' => $this->cost,
            'machine_status_id' => $this->machine_status_id,
        ]);

        $query->andFilterWhere(['like', 'machine_code', $this->machine_code])
            ->andFilterWhere(['like', 'machine_name', $this->machine_name])
            ->andFilterWhere(['like', 'machine_en_name', $this->machine_en_name])
            ->andFilterWhere(['like', 'machine_details', $this->machine_details])
            ->andFilterWhere(['like', 'serial_number', $this->serial_number])
            ->andFilterWhere(['like', 'po_number', $this->po_number])
            ->andFilterWhere(['like', 'installation_date', $this->installation_date])
            ->andFilterWhere(['like', 'docs', $this->docs])
            ->andFilterWhere(['like', 'photos', $this->photos]);

        return $dataProvider;
    }
}
