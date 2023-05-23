<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\MachineType;

/**
 * MachineTypeSearch represents the model behind the search form of `app\modules\engineer\models\MachineType`.
 */
class MachineTypeSearch extends MachineType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['machine_type_code', 'machine_type_name', 'machine_type_details', 'machine_type_color'], 'safe'],
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
        $query = MachineType::find();

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

        $query->andFilterWhere(['like', 'machine_type_code', $this->machine_type_code])
            ->andFilterWhere(['like', 'machine_type_name', $this->machine_type_name])
            ->andFilterWhere(['like', 'machine_type_details', $this->machine_type_details])
            ->andFilterWhere(['like', 'machine_type_color', $this->machine_type_color]);

        return $dataProvider;
    }
}
