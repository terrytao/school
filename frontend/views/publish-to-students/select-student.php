<?php
/**
 * @var $this \yii\web\View
 */
use frontend\assets\DataTableAsset;

$this->title = "Select Major";
?>

<?
$data['schools'] = $schools;
$data['request'] = Yii::$app->request;
$data['provinces'] = $provinces;
DataTableAsset::register($this);
?>
<?= $this->render('@app/views/job/partials/selected-data');
?>
<div class="row">
    <div class="col-md-3">

        <? $data['session'] = $session;

        echo $this->render('@app/views/job/partials/_major_tree', $data); ?>
    </div>
    <div class="col-md-5">

        <div id="schoolContainer">
            <?//= Yii::$app->view->render('@app/views/job/publish-to-students/_schools', $data) ?>
        </div>
    </div>
    <div class="col-md-4">

        <div id="studentContainer">

        </div>
    </div>
</div>


<script>
    $('#demo_menu').easytree();
    function submitRequest() {
        var myRadio2 = $('input[name=province]');
        var province = myRadio2.filter(':checked').val();

        var majorId = $('#selectedMajor').val();
        var is211 = $('#isTwoEleven').is(':checked');
        var is985 = $('#isNineEightFive').is(':checked');
        if (is211) {
            is211 = "1";
        } else {
            is211 = 0;
        }
        if (is985) {
            is985 = "1";
        } else {
            is985 = 0;
        }

        var postData = {
            'majorId': majorId,
            province: province,
            is985: is985,
            is211: is211
        };

        $.post('/publish-to-students/ajax-school-filter', postData, function (data) {
            $('#schoolContainer').html(data);
           // $('#schoolDataTable').DataTable();
        }, 'json');
    }

    function submitGetStudentsRequest(){
        var checked = '';
        $('.selectSchool:checked').each(function (key, val) {
            if (key != 0) {
                checked = checked + ',' + $(this).attr('rec');
            } else {
                checked = checked + '' + $(this).attr('rec');
            }

        });

        var schoolId = checked;
        var postData = {schoolId: schoolId}
        $.post('/job/select-students-by-school', postData, function (data) {
            $('#studentContainer').html(data);
        }, 'json')
    }
    $(function () {
        // listens to a click event on any element that has a class of majorItem
        $('body').on('click', '.majorItem', function () {
            var majorId = $(this).attr('id');
            var realMajorId = majorId.replace("major_", "");
            $('#selectedMajor').val(realMajorId)
            submitRequest();
        })


        $('body').on('change', '#isNineEightFive', function () {
            submitRequest();
        })


        $('body').on('change', '#isTwoEleven', function () {
            submitRequest();
        })
        $('body').on('change', '.province', function () {
            submitRequest();
        });

        $('body').on('click', "#noProvinces", function () {
            $('input:radio[name=province]:checked').prop('checked', false).checkboxradio("refresh");
            submitRequest();
            //return false;
        })


        $('body').on('change', '.selectSchool', function () {

            submitGetStudentsRequest()

        })

        $('body').on('change', '#selectAll', function(){
            $('.selectSchool:checkbox').prop('checked',this.checked);

            submitGetStudentsRequest()
        })
    })
</script>