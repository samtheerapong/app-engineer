<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\Frequency;

/**
 * FrequencySearch represents the model behind the search form of `app\modules\engineer\models\Frequency`.
 */
class FrequencySearch extends Frequency
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['frequency_code', 'frequency_name', 'frequency_details', 'frequency_color'], 'safe'],
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
        $query = Frequency::find();

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

        $query->andFilterWhere(['like', 'frequency_code', $this->frequency_code])
            ->andFilterWhere(['like', 'frequency_name', $this->frequency_name])
            ->andFilterWhere(['like', 'frequency_details', $this->frequency_details])
            ->andFilterWhere(['like', 'frequency_color', $this->frequency_color]);

        return $dataProvider;
    }
}
