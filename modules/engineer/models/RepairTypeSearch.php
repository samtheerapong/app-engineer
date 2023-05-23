<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\RepairType;

/**
 * RepairTypeSearch represents the model behind the search form of `app\modules\engineer\models\RepairType`.
 */
class RepairTypeSearch extends RepairType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['repair_type_code', 'repair_type_name', 'repair_type_details', 'repair_type_color'], 'safe'],
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
        $query = RepairType::find();

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

        $query->andFilterWhere(['like', 'repair_type_code', $this->repair_type_code])
            ->andFilterWhere(['like', 'repair_type_name', $this->repair_type_name])
            ->andFilterWhere(['like', 'repair_type_details', $this->repair_type_details])
            ->andFilterWhere(['like', 'repair_type_color', $this->repair_type_color]);

        return $dataProvider;
    }
}
