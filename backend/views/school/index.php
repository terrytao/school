<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SchoolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schools';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>



<!--    --><?//= GridView::widget([
//        'dataProvider' => $dataProvider,
//      //  'filterModel' => $searchModel,
//        'columns' => [
//            ['class' => 'yii\grid\checkboxColumn'],
//
//            'school_id',
//            'school_name',
//            'school_level',
//            'school_region',
//            'is_211',
//            'is_985',
//            [
//                'attribute' => 'watch_school',
//                //'format'=>'raw',
//                'value' => function ($model) {
//                    return $model->school_name;
//                }
//            ],
//            // 'is_central',
//            // 'school_category',
//// define a template name, then call the buttons key and set the options for hte new button
//            ['class' => 'yii\grid\ActionColumn',
//                'template' => '{view}{update}{save}{post}',
//                'buttons' => [
//                    'save' => function ($url, $model) {
//                        return Html::a('<span class="glyphicon glyphicon-plus"></span>', Url::to('/action'), [
//                            'title' => Yii::t('yii', 'Save'),
//                        ]);
//                    },
//                    'post' => function ($url, $model) {
//                        return Html::a('<span class="glyphicon glyphicon-minus"></span>', Url::to('/action'), [
//                            'title' => Yii::t('yii', 'Post'),
//                        ]);
//                    }
//                ],
//
//            ],
//        ],
//    ]); ?>

</div>

<div class="countries-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
            'modelClass' => 'School',
        ]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <!-- Render create form -->


    <?php yii\widgets\Pjax::begin(['id' => 'new_country']) ?>
    <?php $form=ActiveForm::begin(); ?>
      <?= $form->field($model, 'school_level')->checkboxList(['普通本科' => '普通本科', '高职高专' => '高职高专', ]); ?>
    <?php ActiveForm::end(); ?>
    <?php yii\widgets\Pjax::end() ?>


</div>

<?  Pjax::begin(); ?>

    <?php Pjax::begin(['id' => 'schools']) ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'school_id',
            'school_name',
            'school_region',
            'school_level',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end() ?>
</div>