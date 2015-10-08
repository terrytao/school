<?php
/**
 * @var $this \yii\web\View
 */
use frontend\components\job\JobOptions;

$this->title = "Select Major";
?>
<div class="row">
    <div class="col-md-12">
    <?= $this->render('@app/views/job/partials/selected-data');
    ?>
    </div>
</div>


<div class="row">
    <div class="col-md-5"><?= $this->title; ?>
        <? $data['session'] = $session;
        echo $this->render('@app/views/job/partials/_major_tree', $data); ?>
    </div>


<div class="col-md-6">
    Schools

    <div id="schoolContainer"></div>
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
     //   console.log(province);
        // var realMajorId = majorId.replace("major_", "");
        var postData = {'majorId': majorId, province: province, is985: is985, is211: is211};
        $.post('/job/ajax-get-schools', postData, function (data) {
            $('#schoolContainer').html(data);
        }, 'json');
    }

    $(function () {
        $('#demo_menu').easytree();
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