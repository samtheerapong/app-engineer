<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\Priority;

/**
 * PrioritySearch represents the model behind the search form of `app\modules\engineer\models\Priority`.
 */
class PrioritySearch extends Priority
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['priority_code', 'priority_name', 'priority_details', 'priority_color'], 'safe'],
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
        $query = Priority::find();

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
        ]);

        $query->andFilterWhere(['like', 'priority_code', $this->priority_code])
            ->andFilterWhere(['like', 'priority_name', $this->priority_name])
            ->andFilterWhere(['like', 'priority_details', $this->priority_details])
            ->andFilterWhere(['like', 'priority_color', $this->priority_color]);

        return $dataProvider;
    }
}
