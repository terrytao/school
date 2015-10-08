<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Job;

/**
 * JobSearch represents the model behind the search form about `frontend\models\Job`.
 */
class JobSearch extends Job
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_id', 'employer_id'], 'integer'],
            [['time_created', 'time_updated', 'job_description'], 'safe'],
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
        $query = Job::find()->where(['employer_id' => Yii::$app->session->get('employerId')]);

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
            'job_id' => $this->job_id,
            'time_created' => $this->time_created,
            'time_updated' => $this->time_updated,
        ]);

        $query->andFilterWhere(['like', 'job_description', $this->job_description]);

        return $dataProvider;
    }

    public function searchActive($params)
    {

        $query = Job::find()->where(['employer_id' => Yii::$app->session->get('employerId')]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->andWhere('expiration_date >= :expirationDate', [':expirationDate' => date("Y-m-d H:i:s")]);


        $query->andFilterWhere([
            'job_id' => $this->job_id,
            'time_created' => $this->time_created,
            'time_updated' => $this->time_updated,
        ]);

        $query->andFilterWhere(['like', 'job_description', $this->job_description]);

        return $dataProvider;
    }
}
