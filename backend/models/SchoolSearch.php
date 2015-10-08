<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\School;

/**
 * SchoolSearch represents the model behind the search form about `backend\models\School`.
 */
class SchoolSearch extends School
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id'], 'integer'],
            [['school_name', 'school_level', 'school_province', 'school_city', 'is_211', 'is_985', 'is_central', 'school_category'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = School::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'school_id' => $this->school_id,
        ]);

        $query->andFilterWhere(['like', 'school_name', $this->school_name])
            ->andFilterWhere(['like', 'school_level', $this->school_level])
            ->andFilterWhere(['like', 'school_province', $this->school_province])
            ->andFilterWhere(['like', 'school_city',     $this->school_city])
            ->andFilterWhere(['like', 'is_211', $this->is_211])
            ->andFilterWhere(['like', 'is_985', $this->is_985])
            ->andFilterWhere(['like', 'school_category', $this->school_category]);

        return $dataProvider;
    }
}
