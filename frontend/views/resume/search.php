<? use yii\grid\GridView;
use yii\helpers\Html;

?>

    <h2>
        <?= $major->major_name; ?>
    </h2>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [


        'student_name',
        [
            'header' => 'Actions',
            'format' => 'raw',
            'value' => function ($data) {
                return Html::a('View Resume', ['/resume/view', 'studentId' => $data->student_id]) . ' | ' .
                Html::a('Invite to Job', ['/resume/view', 'studentId' => $data->student_id]);
            }
        ],
    ],
]); ?>