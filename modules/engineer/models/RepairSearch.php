<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\Repair;

/**
 * RepairSearch represents the model behind the search form of `app\modules\engineer\models\Repair`.
 */
class RepairSearch extends Repair
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'requester_by', 'to_department_id', 'repair_type_id', 'machine_id', 'from_department_id', 'priority_id', 'status_id'], 'integer'],
            [['repair_number', 'requester_at', 'title', 'description', 'expected_date', 'photos'], 'safe'],
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
        $query = Repair::find();

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
            'requester_by' => $this->requester_by,
            'to_department_id' => $this->to_department_id,
            'repair_type_id' => $this->repair_type_id,
            'machine_id' => $this->machine_id,
            'from_department_id' => $this->from_department_id,
            'priority_id' => $this->priority_id,
            'status_id' => $this->status_id,
        ]);

        $query->andFilterWhere(['like', 'repair_number', $this->repair_number])
            ->andFilterWhere(['like', 'requester_at', $this->requester_at])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'expected_date', $this->expected_date])
            ->andFilterWhere(['like', 'photos', $this->photos]);

        return $dataProvider;
    }
}
