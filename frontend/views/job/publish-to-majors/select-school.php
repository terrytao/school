<?php
/**
 * @var $this \yii\web\View;
 */

use frontend\assets\DataTableAsset;



DataTableAsset::register($this);
?>
<?= $this->render('partials/selected-data');
?>
<div class="row">

    <div class="col-md-6">

        <div id="schoolContainer">
            <?

            $data['schools'] = $schools;
            $data['provinces'] = $provinces;
            $data['request'] = Yii::$app->request;
            ?>
            <?= Yii::$app->view->render('@app/views/job/publish-to-students/_schools', $data) ?>
        </div>

    </div>
    <div class="col-md-6">
        <div id="schoolMajorContainer">

        </div>
    </div>
</div>

<script>

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
        console.log(province);
        // var realMajorId = majorId.replace("major_", "");
        var postData = {'majorId': majorId, province: province, is985: is985, is211: is211};
        $.post('/job/ajax-filter-schools', postData, function (data) {
            $('#schoolContainer').html(data);
        }, 'json');
    }
    $(function () {

        $('body').on('click', '.selectMajor', function () {
            var schoolId = $(this).attr('rec');

            var postData = {schoolId: schoolId};
            $.post('/job/ajax-get-school-majors', postData, function (data) {
                $('#schoolMajorContainer').html(data);
                $('#schoolMajorTable').DataTable();
            }, 'json');
            return false;
        });


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

    })
</script>