<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\JobPostingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jobs to Me';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-posting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['id' => 'studentJobsToMeGrid'],
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],

            'job_posting_id',
            'school_major_student_id',
            'employer_id',
            'job_id',
            'to_school',
            // 'to_major',
            // 'to_student',
            // 'time_created',
            // 'time_updated',
            // 'what table
            //school_id',
            // 'major_id',
            // 'student_id',

            ['class' => 'yii\grid\DataColumn',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::a('Apply', '#', ['class' => 'applySingleBtn', 'rec' => $data->job_posting_id]) . " " .
                    Html::a('Save', '#', ['class' => 'saveSingleBtn', 'rec' => $data->job_posting_id]);
                }
            ],
        ],
    ]); ?>

</div>
<?= Html::a('Apply Selected Jobs', '#', ['id' => 'apply', 'class' => 'btn btn-success']); ?>
<?= Html::a('Save Selected Jobs', '#', ['id' => 'saveSelectedJobs', 'class' => 'btn btn-success']); ?>
<script>
    $(function () {


        $('body').on('click', '.saveSingleBtn', function () {
            var jobPostingId = $(this).attr('rec');
            var keys = [];
            keys.push(jobPostingId);
            $.post('<?=Yii::$app->urlManager->createUrl('/display-jobs/save');?>', {'jobIds': keys}, function (data) {

            }, 'json');
            return false;
        });


        $('body').on('click', '#saveSelectedJobs', function () {
            var keys = $('#studentJobsToMeGrid').yiiGridView('getSelectedRows');
            $.post('<?=Yii::$app->urlManager->createUrl('/display-jobs/save');?>', {'jobIds': keys}, function (data) {

            }, 'json');
            return false;
        });



        $('body').on('click', '.applySingleBtn', function () {
            var jobPostingId = $(this).attr('rec');
            var keys = [];
            keys.push(jobPostingId);
            $.post('<?=Yii::$app->urlManager->createUrl('/display-jobs/apply');?>', {'jobIds': keys}, function (data) {

            }, 'json');
            return false;
        });

        $("#apply").on('click', function () {
            var keys = $('#studentJobsToMeGrid').yiiGridView('getSelectedRows');
            console.log(keys);
            $.post('<?=Yii::$app->urlManager->createUrl('/display-jobs/apply');?>', {'jobIds': keys}, function (data) {

            }, 'json');
            return false;
        })

    })
</script>
