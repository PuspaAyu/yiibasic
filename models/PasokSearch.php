<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pasok;

/**
 * PasokSearch represents the model behind the search form of `app\models\Pasok`.
 */
class PasokSearch extends Pasok
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasok', 'id_distributor', 'id_barang', 'jumlah'], 'integer'],
            [['tanggal'], 'safe'],
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
        $query = Pasok::find();

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
            'id_pasok' => $this->id_pasok,
            'id_distributor' => $this->id_distributor,
            'id_barang' => $this->id_barang,
            'jumlah' => $this->jumlah,
            'tanggal' => $this->tanggal,
        ]);

        return $dataProvider;
    }
}
