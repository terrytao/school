<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/19/15
 * Time: 8:25 PM
 */

namespace frontend\models;


use yii\base\Model;
use yii\data\ActiveDataProvider;

class JobApplicantSearch extends JobApplicant
{
    public function rules()
    {
        return [
            [['job_posting_id', 'student_id'], 'integer'],
            [['time_create', 'job_application_status', 'job_application_status_text'], 'safe']
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = JobApplicant::find();

        $dataProvider = New ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

//        if (!$this->validate()) {
//            // uncomment the following line if you do not want to return any records when validation fails
//            // $query->where('0=1');
//            return $dataProvider;
//        };

        $query->andFilterWhere([

            'job_applicant_id' => $this->job_applicant_id,
            'job_posting_id' => $this->job_posting_id,
            'student_id' => $this->student_id,
            'job_application_status' => $this->job_application_status,


        ]);

        return $dataProvider;
    }


    public function searchByEmployer($params, $employerId)
    {
        $query = JobApplicant::find()->joinWith(['jobPosting' => function ($query) use ($employerId) {
            $query->where(['employer_id' => $employerId]);
        }]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

//        if (!$this->validate()) {
//            // uncomment the following line if you do not want to return any records when validation fails
//            // $query->where('0=1');
//            return $dataProvider;
//        };

        $query->andFilterWhere([

            'job_applicant_id' => $this->job_applicant_id,
            'job_posting_id' => $this->job_posting_id,
            'student_id' => $this->student_id,
            'job_application_status' => $this->job_application_status,


        ]);

        return $dataProvider;
    }
}