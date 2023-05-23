<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\Year;

/**
 * YearSearch represents the model behind the search form of `app\modules\engineer\models\Year`.
 */
class YearSearch extends Year
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['year_code', 'year_name', 'year_details', 'year_color'], 'safe'],
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
        $query = Year::find();

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

        $query->andFilterWhere(['like', 'year_code', $this->year_code])
            ->andFilterWhere(['like', 'year_name', $this->year_name])
            ->andFilterWhere(['like', 'year_details', $this->year_details])
            ->andFilterWhere(['like', 'year_color', $this->year_color]);

        return $dataProvider;
    }
}
