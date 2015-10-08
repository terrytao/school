<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Student;

/**
 * StudentSearch represents the model behind the search form about `frontend\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'school_id', 'major_id', 'school_major_id', 'user_id'], 'integer'],
            [['student_name', 'school_name', 'major_name', 'student_degree', 'gender', 'finish_year', 'major_level', 'created_time'], 'safe'],
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
        $query = Student::find();

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
            'student_id' => $this->student_id,
            'school_id' => $this->school_id,
            'major_id' => $this->major_id,
            'school_major_id' => $this->school_major_id,
            'user_id' => $this->user_id,
            'created_time' => $this->created_time,
        ]);

        $query->andFilterWhere(['like', 'student_name', $this->student_name])
            ->andFilterWhere(['like', 'school_name', $this->school_name])
            ->andFilterWhere(['like', 'major_name', $this->major_name])
            ->andFilterWhere(['like', 'student_degree', $this->student_degree])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'finish_year', $this->finish_year])
            ->andFilterWhere(['like', 'major_level', $this->major_level]);

        return $dataProvider;
    }
}
