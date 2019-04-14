<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Propertyforrent;

/**
 * PropertyforrentSearch represents the model behind the search form of `frontend\models\Propertyforrent`.
 */
class PropertyforrentSearch extends Propertyforrent
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'room', 'owner_id', 'staff_id', 'branch_id'], 'integer'],
            [['property_no', 'type'], 'safe'],
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
        $query = Propertyforrent::find();

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
            'room' => $this->room,
            'owner_id' => $this->owner_id,
            'staff_id' => $this->staff_id,
            'branch_id' => $this->branch_id,
        ]);

        $query->andFilterWhere(['like', 'property_no', $this->property_no])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
