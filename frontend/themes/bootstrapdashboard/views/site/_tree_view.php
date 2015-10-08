<?
use frontend\models\School;
use yii\helpers\Json;

$url = Yii::$app->urlManager->createUrl('/');
?>
<link rel="stylesheet" href="<?= $url; ?>/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css"/>
<script type="text/javascript" src="<?= $url; ?>/jqwidgets/scripts/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?= $url; ?>/jqwidgets/scripts/demos.js"></script>
<script type="text/javascript" src="<?= $url; ?>/jqwidgets/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="<?= $url; ?>/jqwidgets/jqwidgets/jqxdata.js"></script>
<script type="text/javascript" src="<?= $url; ?>/jqwidgets/jqwidgets/jqxbuttons.js"></script>
<script type="text/javascript" src="<?= $url; ?>/jqwidgets/jqwidgets/jqxscrollbar.js"></script>
<script type="text/javascript" src="<?= $url; ?>/jqwidgets/jqwidgets/jqxpanel.js"></script>
<script type="text/javascript" src="<?= $url; ?>/jqwidgets/jqwidgets/jqxtree.js"></script>
<script type="text/javascript" src="<?= $url; ?>/jqwidgets/jqwidgets/jqxexpander.js"></script>
<div id='content'>
    <?
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
    } else {
        $search = '北京';    
    }
    //
    $schools = School::find()->with(['majors'])->filterWhere(['LIKE', 'school_province', $search])->all();

    $arr = [];
    foreach ($schools as $schoolKey => $school) {
        $arr[] = [
            'id' => $school->school_id,
            'parentid' => '-1',
            'text' => $school->school_name,
            'value' => $school->school_id,
        ];
        foreach ($school->majors as $major) {
            $arr[] = [
                'id' => $major->major_id,
                'parentid' => $school->school_id,
                'text' => $major->major->major_name,
                'value' => $major->major->major_name
            ];

            foreach ($major->schoolMajorStudents as $schoolMajorStudent) {
                if ($schoolMajorStudent->student->gender == 'm') {
                    $parentId = 'xxx';
                } else {
                    $parentId = 'yyy';
                }
                $arr[] = [
                    'id' => $schoolMajorStudent->nprofileschool_major_student_id,
                    'parentid' => $parentId,
                    'text' => $schoolMajorStudent->student->student_name,
                    'value' => $schoolMajorStudent->student->student_id,
                ];
            }
            $arr[] = [
                'id' => 'xxx',
                'parentid' => $major->major_id,
                'text' => 'Male',
                'value' => 'Male'
            ];
            $arr[] = [
                'id' => 'yyy',
                'parentid' => $major->major_id,
                'text' => 'Female',
                'value' => 'Female'
            ];
        }

    }
    $data['arr'] = Json::encode($arr);
    // $data['schools'] = $schools;
    // $result['view'] = $this->renderPartial('_tree_view', $data);

    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            var data =
            <?=$data['arr'];?>



            // prepare the data
            var source =
            {
                datatype: "json",
                datafields: [
                    {name: 'id'},
                    {name: 'parentid'},
                    {name: 'text'},
                    {name: 'value'}
                ],
                id: 'id',
                localdata: data
            };
            // create data adapter.
            var dataAdapter = new $.jqx.dataAdapter(source);
            // perform Data Binding.
            dataAdapter.dataBind();
            // get the tree items. The first parameter is the item's id. The second parameter is the parent item's id. The 'items' parameter represents
            // the sub items collection name. Each jqxTree item has a 'label' property, but in the JSON data, we have a 'text' field. The last parameter
            // specifies the mapping between the 'text' and 'label' fields.
            var records = dataAdapter.getRecordsHierarchy('id', 'parentid', 'items', [{name: 'text', map: 'label'}]);
            $('#jqxWidget').jqxTree({source: records, width: '300px'});

            $('#jqxWidget').on('select', function (event) {
                var args = event.args;
                var item = $('#jqxWidget').jqxTree('getItem', args.element);
                console.log('<div style="margin-top: 5px;">Selected: ' + item.label + '' + item.value + '</div>');
                return false;
            });
        });
    </script>
    <div id='jqxWidget'>
    </div>
</div>