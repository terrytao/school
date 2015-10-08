<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\JobInvitation;

/**
 * JobInvitationSearch represents the model behind the search form about `frontend\models\JobInvitation`.
 */
class JobInvitationSearch extends JobInvitation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_invitation_id', 'student_id', 'job_posting_id'], 'integer'],
            [['date_created'], 'safe'],
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
        $query = JobInvitation::find();

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
            'job_invitation_id' => $this->job_invitation_id,
            'student_id' => $this->student_id,
            'job_posting_id' => $this->job_posting_id,
            'date_created' => $this->date_created,
        ]);

        return $dataProvider;
    }
}
