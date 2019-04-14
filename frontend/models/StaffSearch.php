<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Staff;

/**
 * StaffSearch represents the model behind the search form of `frontend\models\Staff`.
 */
class StaffSearch extends Staff
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'salary', 'branch_id'], 'integer'],
            [['staff_no', 'frist_name', 'last_name', 'position', 'sex', 'DOB'], 'safe'],
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
        $query = Staff::find();

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
            'DOB' => $this->DOB,
            'salary' => $this->salary,
            'branch_id' => $this->branch_id,
        ]);

        $query->andFilterWhere(['like', 'staff_no', $this->staff_no])
            ->andFilterWhere(['like', 'frist_name', $this->frist_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'sex', $this->sex]);

        return $dataProvider;
    }
}
