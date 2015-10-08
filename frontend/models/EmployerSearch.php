<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Employer;

/**
 * EmployerSearch represents the model behind the search form about `frontend\models\Employer`.
 */
class EmployerSearch extends Employer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employer_id', 'user_id'], 'integer'],
            [['time_created', 'time_updated', 'employer_name', 'employer_description'], 'safe'],
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
        $query = Employer::find();

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
            'employer_id' => $this->employer_id,
            'time_created' => $this->time_created,
            'time_updated' => $this->time_updated,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'employer_name', $this->employer_name])
            ->andFilterWhere(['like', 'employer_description', $this->employer_description]);

        return $dataProvider;
    }
}
