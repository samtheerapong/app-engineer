<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\Operator;

/**
 * OperatorSearch represents the model behind the search form of `app\modules\engineer\models\Operator`.
 */
class OperatorSearch extends Operator
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'repair_id', 'operator_by'], 'integer'],
            [['operator_at', 'started_at', 'finished_at', 'cause_solution', 'photos', 'items'], 'safe'],
            [['repair_cost'], 'number'],
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
        $query = Operator::find();

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
            'repair_id' => $this->repair_id,
            'operator_by' => $this->operator_by,
            'repair_cost' => $this->repair_cost,
        ]);

        $query->andFilterWhere(['like', 'operator_at', $this->operator_at])
            ->andFilterWhere(['like', 'started_at', $this->started_at])
            ->andFilterWhere(['like', 'finished_at', $this->finished_at])
            ->andFilterWhere(['like', 'cause_solution', $this->cause_solution])
            ->andFilterWhere(['like', 'photos', $this->photos])
            ->andFilterWhere(['like', 'items', $this->items]);

        return $dataProvider;
    }
}
