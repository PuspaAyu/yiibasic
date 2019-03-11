<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Distributor;

/**
 * DistributorSearch represents the model behind the search form of `app\models\Distributor`.
 */
class DistributorSearch extends Distributor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_distributor'], 'integer'],
            [['nama_distributor', 'alamat', 'telepon'], 'safe'],
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
        $query = Distributor::find();

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
            'id_distributor' => $this->id_distributor,
        ]);

        $query->andFilterWhere(['like', 'nama_distributor', $this->nama_distributor])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'telepon', $this->telepon]);

        return $dataProvider;
    }
}
