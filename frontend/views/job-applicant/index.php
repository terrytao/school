<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/20/15
 * Time: 7:32 AM
 */
use frontend\models\Resume;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

$this->title = "Job Applicants";
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="job-applicant-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],

            'job_applicant_id',
            'job_posting_id',
            [
                'attribute' => 'student_id',
                'format' => 'raw',

                'value' => function ($data) {

                    $resume = Resume::find()->where(['student_id' => $data['student_id']])->one();
                    if ($resume) {
                        $resumeId = $resume['resume_id'];

                        return Html::a($data->student_id, ['/resume/view-resume', 'resumeId' => $resume->resume_id]);
                    } else {
                        return 'No Resume';
                    }

                },


            ],
            'job_application_status',
            'job_application_status_text',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{apply}',
                'buttons' => [

                    'apply' => function ($url, $model, $index) {
                        return Html::a('<span class="glyphicon glyphicon-envelope"></span>', [
                            '/job-applicant/apply',
                            'jobApplicantId' => $model->job_applicant_id,

                        ],
                            ['title' => Yii::t('yii', 'apply it now?')]
                        );
                    }
                ],
            ],

        ],
    ]);

    ?>

</div>