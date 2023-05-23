<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\PmPlan;

/**
 * PmPlanSearch represents the model behind the search form of `app\modules\engineer\models\PmPlan`.
 */
class PmPlanSearch extends PmPlan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'week_id', 'month_id', 'year_id'], 'integer'],
            [['pm_value'], 'number'],
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
        $query = PmPlan::find();

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
            'week_id' => $this->week_id,
            'month_id' => $this->month_id,
            'year_id' => $this->year_id,
            'pm_value' => $this->pm_value,
        ]);

        return $dataProvider;
    }
}
