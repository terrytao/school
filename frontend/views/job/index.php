<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\JobSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Job', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['id' => 'grid'],
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],
            'job_id',
            'time_created',
            'job_description',
            [
                'header' => 'Invitations Sent',
                'format' => 'raw',
                'value' => function ($data) {
                    return 0;
                }
            ],
            //['class' => 'yii\grid\ActionColumn'],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{save}{post}{delete}',
                'buttons' => [
                    'save' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-plus"></span>', Url::to('../employer/action'),
                            [
                                'title' => Yii::t('yii', 'Save'),
                            ]);
                    },
                    'post' => function ($url, $model, $index) {
                        return Html::a('<span class="glyphicon glyphicon-envelope"></span>', Url::to([
                            '/job-posting/pick-major-level',
                            'job_id' => $model->job_id,
                            'job_name' => $model->job_description,
                            'index' => $index
                        ]), [
                            'title' => Yii::t('yii', 'Send to Selected Majors or Students'),

                        ]);
                    },


                ],
            ],
        ],
    ]); ?>


</div>
<div><? //= Html::a('Choose Jobs to Publish', ['employer/publish-job-step1'],['class'=>'btn btn-success', 'id'=>'publish']) ?></div>
<?=Html::a('publish','#publish',['id'=>'publish']);?>

<script>
    $(function () {



        $("#publish").on('click', function () {

            //    console.log("CLICKED");
            var keys = $('#grid').yiiGridView('getSelectedRows');
            console.log(keys);
            $.post('<?=Yii::$app->urlManager->createUrl('/job/publish-jobs');?>', {'jobs': keys}, function (data) {
                if (data.success) {
                    window.location.href = data.redirect;
                }
            }, 'json');

        })

    })
</script>
