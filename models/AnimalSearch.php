<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Animal;

/**
 * AnimalSearch represents the model behind the search form of `app\models\Animal`.
 */
class AnimalSearch extends Animal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'usuario_id', 'endereco_id'], 'integer'],
            [['nome', 'sexo', 'cor', 'raca', 'porte', 'idade', 'foto'], 'safe'],
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
        $query = Animal::find();

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
            'usuario_id' => $this->usuario_id,
            'endereco_id' => $this->endereco_id,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'cor', $this->cor])
            ->andFilterWhere(['like', 'raca', $this->raca])
            ->andFilterWhere(['like', 'porte', $this->porte])
            ->andFilterWhere(['like', 'idade', $this->idade])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
