<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\Month;

/**
 * MonthSearch represents the model behind the search form of `app\modules\engineer\models\Month`.
 */
class MonthSearch extends Month
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['month_code', 'month_name', 'month_details', 'month_color'], 'safe'],
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
        $query = Month::find();

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

        $query->andFilterWhere(['like', 'month_code', $this->month_code])
            ->andFilterWhere(['like', 'month_name', $this->month_name])
            ->andFilterWhere(['like', 'month_details', $this->month_details])
            ->andFilterWhere(['like', 'month_color', $this->month_color]);

        return $dataProvider;
    }
}
