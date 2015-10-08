<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\EmployerJobSchool;

/**
 * EmployerJobSchoolSearch represents the model behind the search form about `frontend\models\EmployerJobSchool`.
 */
class EmployerJobSchoolSearch extends EmployerJobSchool
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employer_job_school_id', 'employer_id'], 'integer'],
            [['job', 'school', 'major', 'time_created'], 'safe'],
            [['time_updated'], 'number'],
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
        $query = EmployerJobSchool::find();

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
            'employer_job_school_id' => $this->employer_job_school_id,
            'employer_id' => $this->employer_id,
            'time_created' => $this->time_created,
            'time_updated' => $this->time_updated,
        ]);

        $query->andFilterWhere(['like', 'job', $this->job])
            ->andFilterWhere(['like', 'school', $this->school])
            ->andFilterWhere(['like', 'major', $this->major]);

        return $dataProvider;
    }
}
