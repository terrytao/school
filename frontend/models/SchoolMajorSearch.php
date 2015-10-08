<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SchoolMajor;

/**
 * SchoolMajorSearch represents the model behind the search form about `frontend\models\SchoolMajor`.
 */
class SchoolMajorSearch extends SchoolMajor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_major_id', 'school_id', 'major_id', 'number_of_male_student'], 'integer'],
            [['time_created', 'time_updated', 'major_level'], 'safe'],
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
        $query = SchoolMajor::find();

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
            'school_major_id' => $this->school_major_id,
            'school_id' => $this->school_id,
            'major_id' => $this->major_id,
            'time_created' => $this->time_created,
            'time_updated' => $this->time_updated,
            'number_of_male_student' => $this->number_of_male_student,
        ]);

        $query->andFilterWhere(['like', 'major_level', $this->major_level]);

        return $dataProvider;
    }
}
