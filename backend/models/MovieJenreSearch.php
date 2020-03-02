<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MovieJenre;

/**
 * MovieJenreSearch represents the model behind the search form of `backend\models\MovieJenre`.
 */
class MovieJenreSearch extends MovieJenre
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['movie_id', 'jenre_id'], 'integer'],
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
        $query = MovieJenre::find();

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
            'movie_id' => $this->movie_id,
            'jenre_id' => $this->jenre_id,
        ]);

        return $dataProvider;
    }
}
