<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\Maintenance;

/**
 * MaintenanceSearch represents the model behind the search form of `app\modules\engineer\models\Maintenance`.
 */
class MaintenanceSearch extends Maintenance
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'machine_id', 'station_id', 'rank', 'frequency_id'], 'integer'],
            [['std_pm_time'], 'number'],
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
        $query = Maintenance::find();

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
            'machine_id' => $this->machine_id,
            'station_id' => $this->station_id,
            'std_pm_time' => $this->std_pm_time,
            'rank' => $this->rank,
            'frequency_id' => $this->frequency_id,
        ]);

        return $dataProvider;
    }
}
