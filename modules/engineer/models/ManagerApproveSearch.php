<?php

namespace app\modules\engineer\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\engineer\models\ManagerApprove;

/**
 * ManagerApproveSearch represents the model behind the search form of `app\modules\engineer\models\ManagerApprove`.
 */
class ManagerApproveSearch extends ManagerApprove
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'repair_id', 'manager_by', 'repair_machine_repair_id', 'repair_machine_machine_id'], 'integer'],
            [['approve_at'], 'safe'],
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
        $query = ManagerApprove::find();

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
            'manager_by' => $this->manager_by,
            'repair_machine_repair_id' => $this->repair_machine_repair_id,
            'repair_machine_machine_id' => $this->repair_machine_machine_id,
        ]);

        $query->andFilterWhere(['like', 'approve_at', $this->approve_at]);

        return $dataProvider;
    }
}
