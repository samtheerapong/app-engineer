<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\MaintenancePlan;

/**
 * MaintenancePlanSearch represents the model behind the search form of `app\modules\engineer\models\MaintenancePlan`.
 */
class MaintenancePlanSearch extends MaintenancePlan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['maintenance_id', 'pm_plan_id'], 'integer'],
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
        $query = MaintenancePlan::find();

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
            'maintenance_id' => $this->maintenance_id,
            'pm_plan_id' => $this->pm_plan_id,
        ]);

        return $dataProvider;
    }
}
