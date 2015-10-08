<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Resume;

/**
 * ResumeSearch represents the model behind the search form about `frontend\models\Resume`.
 */
class ResumeSearch extends Resume
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resume_id', 'student_id'], 'integer'],
            [['time_created', 'resume_content', 'updated_time'], 'safe'],
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
        $query = Resume::find();

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
            'resume_id' => $this->resume_id,
            'student_id' => $this->student_id,
            'time_created' => $this->time_created,
            'updated_time' => $this->updated_time,
        ]);

        $query->andFilterWhere(['like', 'resume_content', $this->resume_content]);

        return $dataProvider;
    }
}
