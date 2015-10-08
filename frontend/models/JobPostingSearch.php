<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\JobPosting;

/**
 * JobPostingSearch represents the model behind the search form about `frontend\models\JobPosting`.
 */
class JobPostingSearch extends JobPosting
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_posting_id', 'school_major_student_id', 'employer_id', 'job_id', 'school_id', 'major_id', 'student_id'], 'integer'],
            [['to_school', 'to_major', 'to_student', 'time_created', 'time_updated'], 'safe'],
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
        $query = JobPosting::find();

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
            'job_posting_id' => $this->job_posting_id,
            'school_major_student_id' => $this->school_major_student_id,
            'employer_id' => $this->employer_id,
            'job_id' => $this->job_id,
            'time_created' => $this->time_created,
            'time_updated' => $this->time_updated,
            'school_id' => $this->school_id,
            'major_id' => $this->major_id,
            'student_id' => $this->student_id,
        ]);

        $query->andFilterWhere(['like', 'to_school', $this->to_school])
            ->andFilterWhere(['like', 'to_major', $this->to_major])
            ->andFilterWhere(['like', 'to_student', $this->to_student]);

        return $dataProvider;
    }

    public function searchJobPostedToMe($params)
    {
        $query = JobPosting::find();

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
            'job_posting_id' => $this->job_posting_id,
            'school_major_student_id' => $this->school_major_student_id,
            'employer_id' => $this->employer_id,
            'job_id' => $this->job_id,
            'time_created' => $this->time_created,
            'time_updated' => $this->time_updated,
            'school_id' => Yii::$app->session->get('studentSchoolId'),
            'major_id' => Yii::$app->session->get('studentMajorId'),


        ]);

        $query->orFilterWhere([

            'student_id' => Yii::$app->session->get('studentId'),
        ]);

        $query->andFilterWhere(['like', 'to_school', $this->to_school])
            ->andFilterWhere(['like', 'to_major', $this->to_major])
            ->andFilterWhere(['like', 'to_student', $this->to_student]);

        return $dataProvider;


    }

    public function searchJobPostedByEmployer($params)
    {
        $query = JobPosting::find();

        $dataProvider = New ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }


        $query->andFilterWhere([
            'job_posting_id' => $this->job_posting_id,
            'school_major_student_id' => $this->school_major_student_id,
            'employer_id' => Yii::$app->session->get('employerId'),
            'job_id' => $this->job_id,
            'time_created' => $this->time_created,
            'time_updated' => $this->time_updated,
            'school_id' => $this->school_id,
            'major_id' => $this->major_id,


        ]);


        $query->andFilterWhere(['like', 'to_school', $this->to_school])
            ->andFilterWhere(['like', 'to_major', $this->to_major])
            ->andFilterWhere(['like', 'to_student', $this->to_student]);

        return $dataProvider;
    }

    public function searchJobsToStudents($params)
    {
        $query = JobPosting::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->andWhere(['employer_id' => Yii::$app->session->get('employerId')]);
        $query->andWhere('student_id IS NOT NULL');

        $query->andFilterWhere([
            'job_posting_id' => $this->job_posting_id,
            'school_major_student_id' => $this->school_major_student_id,
            // 'employer_id' => $this->employer_id,
            'job_id' => $this->job_id,
            'time_created' => $this->time_created,
            'time_updated' => $this->time_updated,
            'school_id' => $this->school_id,
            'major_id' => $this->major_id,
            //  'student_id' => $this->student_id,
        ]);

        $query->andFilterWhere(['like', 'to_school', $this->to_school])
            ->andFilterWhere(['like', 'to_major', $this->to_major])
            ->andFilterWhere(['like', 'to_student', $this->to_student]);

        return $dataProvider;
    }

    public function searchStudentJobsToSchools($params)
    {
        $query = JobPosting::find();

        $student = Student::find()->where(['student_id' => Yii::$app->session->get('studentId')])->one();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,

        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andWhere(['school_id' => $student->school_id]);
        $query->andWhere(['major_id' => $student->major_id]);

        $query->andFilterWhere([
            'job_posting_id' => $this->job_posting_id,
            'school_major_student_id' => $this->school_major_student_id,
            // 'employer_id' => $this->employer_id,
            'job_id' => $this->job_id,
            'time_created' => $this->time_created,
            'time_updated' => $this->time_updated,
           // 'school_id' => $this->school_id,
           // 'major_id' => $this->major_id,
            //  'student_id' => $this->student_id,
        ]);

        $query->andFilterWhere(['like', 'to_school', $this->to_school])
            ->andFilterWhere(['like', 'to_major', $this->to_major])
            ->andFilterWhere(['like', 'to_student', $this->to_student]);

        return $dataProvider;
    }


    /**
     * Jobs where student_id = logged in student
     * @param $params
     * @return ActiveDataProvider
     */
    public function searchStudentJobsToMe($params)
    {
        $query = JobPosting::find();

        $student = Student::find()->where(['student_id' => Yii::$app->session->get('studentId')])->one();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,

        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andWhere(['student_id' => $student->student_id]);


        $query->andFilterWhere([
            'job_posting_id' => $this->job_posting_id,
            'school_major_student_id' => $this->school_major_student_id,
            // 'employer_id' => $this->employer_id,
            'job_id' => $this->job_id,
            'time_created' => $this->time_created,
            'time_updated' => $this->time_updated,
            // 'school_id' => $this->school_id,
            // 'major_id' => $this->major_id,
            //  'student_id' => $this->student_id,
        ]);

        $query->andFilterWhere(['like', 'to_school', $this->to_school])
            ->andFilterWhere(['like', 'to_major', $this->to_major])
            ->andFilterWhere(['like', 'to_student', $this->to_student]);

        return $dataProvider;
    }
}
