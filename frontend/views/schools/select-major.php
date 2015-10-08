<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?= Html::textInput('school', '', [
        'id' => 'school_id',
        'class' => 'form-control',

    ]
); ?>

<p></p>
<?= Html::textInput('major','', [
        'id'=>'major_id',
        'class'=>'form-control',
    ])
;?>

<?= Html::a('yahoo.com', ['site/about']); ?>




<?
// when a school is selected the value is the name of the school, so we need a hidden field for the id
echo Html::hiddenInput('school_id_hidden', '', ['id' => 'school_id_hidden']);
echo Html::hiddenInput('major_id_hidden', '', ['id'=>'major_id_hidden']);
?>

<?= Html::a('Save', '#saveMajor', [
    'class' => 'btn btn-success',
    'id' => 'saveMajorBtn'
]); ?>

<script>
    $(function () {

        // ajax code to save a major when save button is clicked
        $('body').on('click', '#saveMajorBtn', function () {
            var schoolId = $('#school_id_hidden').val();
            var majorId = $('#major_id_hidden').val();
           // console.log(schoolId);
            var postData = {
                SchoolMajor: {
                    school_id: schoolId,
                    major_id: majorId
                }
            };

            $.post('<?=Yii::$app->urlManager->createUrl(['schools/ajax-save-major']);?>', postData, function (data) {
                if (data.success) {
                    toastr.success(data.msg);
                }
                else{
                    toastr.success(data.msg)
                }
            }, 'json')
        })

        // jquery auto complete function to get school names
        $("#school_id").autocomplete({
            source: "<?=Yii::$app->urlManager->createUrl(['schools/ajax-find-schools']);?>",
            minLength: 2,
            select: function (event, ui) {
                $('#school_id_hidden').val(ui.item.id);
              log(ui.item ?
                "Selected: " + ui.item.value + " aka " + ui.item.id :
                "Nothing selected, input was " + this.value);
            }
        });

        $("#major_id").autocomplete({
            source: "<?=Yii::$app->urlManager->createUrl(['majors/ajax-find-majors']);?>",
            minLength: 1,
            select: function (event, ui) {
                $('#major_id_hidden').val(ui.item.id);
//                log(ui.item ?
//                "Selected: " + ui.item.value + " aka " + ui.item.id :
//                "Nothing selected, input was " + this.value);
            }
        });
    });
</script>