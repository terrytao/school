<?php
/**
 *
 */
use frontend\models\SchoolMajor;
use yii\helpers\Html;
use yii\helpers\Json;

?>

<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>


<div class="page-header">
    <h1>
        Publish Job
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            with selectable items(single &amp; multiple) and custom icons
        </small>
    </h1>
</div>
<div class="widget-header">

    <?= Html::a('Clear All Filters 清空所有筛选', '#clearFilters', ['class' => 'btn btn-danger', 'id' => 'clearFilters']); ?>
</div>

<div class="row">


    <!--    <div id="schoolFilterContainer"></div>-->

    <?= Yii::$app->view->render('@app/views/job/partials/_school-filter') ?>


</div>




<div class="col-md-12">

        <!--
        <div class="widget-header">
            <h4 class="widget-title lighter smaller">Search Majors 搜索专业</h4>
            <?= Html::a('Quick Browse All Majors 快速浏览所有专业', '/site/about?majorsIds=' . $majorId, ['class' => 'btn btn-danger']); ?>
        </div>
        -->
        <div class="widget-body">
            <div class="control-group">


            </div>
            <div class="widget-main ">
                <?= Html::textInput('select2Major', '', ['multiple' => 'multiple', 'style' => 'width:100%', 'id' => 'select2Major', 'placeholder'=>'keywords for majors 关键词搜索专业']); ?>


            </div>
            <div class="widget-main padding-8">

                <?= Html::a('Quick Browse All Majors 快速浏览所有专业', '/site/about?majorsIds=' . $majorId, ['class' => 'btn btn-danger']); ?>

                <?= Html::textInput('dropDownSelectedMajors', $majorId, ['style' => 'width:70%', 'id' => 'dropDownSelectedMajors']); ?>

            </div>
        </div>

</div>
<div class="row">
    <div class="col-md-12">
        <!-- PAGE CONTENT BEGINS -->
        <!-- #section:plugins/fuelux.treeview -->
        <div class="row">
            <div class="col-md-3">
                <div class="widget-box widget-color-red">
                    <div class="widget-header">
                        <h4 class="widget-title lighter smaller">选择专业</h4>
                    </div>
                    <div class="widget-body">
                        <div class="widget-main padding-8">
                            <div class="control-group">

                                <button class="btn btn-primary treeFilterBtn" id="treeBachelor">本科</button>

                                <button class="btn btn-success treeFilterBtn" id="treeDiploma">专科</button>

                                <button class="btn btn-warning treeFilterBtn" id="treeMaster">Master</button>


                            </div>
                        </div>
                        <div class="widget-main padding-8">
                            <div id="courseTreeContainer">
                                <ul id="courseTree"></ul>
                                <?= $this->render('@app/views/job/trees/_bachelor-tree'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5" id="schoolContainerContainer">

                <!--------------------------------- School container -------------------->
                <div class="row">
                    <div class="col-md-12">
                        <div id="schoolContainer"></div>

                        <div role="alert" class="tree-loader ">
                            <div class="tree-loading hide " id="schoolListLoader"><i
                                    class="ace-icon fa fa-5x fa-refresh fa-spin blue"></i></div>
                        </div>

                    </div>
                    <!-- /.span -->
                </div>
                <!--------------------------------- /School container -------------------->

                <div class="hr hr-18 dotted hr-double"></div>


            </div>


            <div class="col-md-4">
                <!--------------------------------- Student container -------------------->
                <div class="row">
                    <div class="col-md-11">
                        <div id="studentContainer"></div>
                        <div role="alert" class="tree-loader ">
                            <div class="tree-loading hide " id="studentListLoader"><i
                                    class="ace-icon fa fa-5x fa-refresh fa-spin blue"></i></div>
                        </div>
                    </div>
                    <!-- /.span -->
                </div>
                <!--------------------------------- /Student container -------------------->

                <div class="hr hr-18 dotted hr-double"></div>


            </div>
            <!-- /.col -->
        </div>
    </div>


    <!-- PAGE CONTENT ENDS -->
</div>

<script>

    /**
     * Publish to schools, select schools then redirect
     */
    function selectSchoolsToPublishTo() {
        $('body').on('click', '#publishToSchoolsBtn', function () {

            var schoolIds = [];
            $('.selectSchools:checked').each(function (i, e) {
                schoolIds.push($(this).val());
            });

            var postData = {
                schoolIds: schoolIds
            }
            //$('#schoolListLoader').removeClass('hide');
            $.post('/job/ajax-select-schools', postData, function (data) {
                if (data.success) {
                    window.location.href = data.redirect;
                }
            }, 'json');
            return false;
        })
    }


    $(function () {

        selectSchoolsToPublishTo();


        $('body').on('click', '.treeFilterBtn', function () {
            var filter = $(this).attr('id');
            var postData = {
                level: filter
            }
            $.post('/job/ajax-tree-level-filter', postData, function (data) {
                $('#courseTreeContainer').html(data);
            }, 'json');
            return false;
        })

    })
</script>
<script>
    function clearTree() {

        $.each($('.tree-selected'), function (key, val) {
            $(this).removeClass('tree-selected');
        })
        $.each($('.fa-check'), function (key, val) {
            $(this).removeClass('fa-check');
            $(this).addClass('fa-times');
        })
//        $.each($('.tree-branch-children'), function (key, val) {
//            $(this).addClass('hide');
//        })
//        $.each($('.icon-folder'), function (key, val) {
//            $(this).removeClass('tree-minus');
//            $(this).addClass('tree-plus');
//        })
    }

    function submitRequest() {

        $('#schoolContainer').html("");
        $('#schoolListLoader').removeClass('hide');
        $('#studentContainer').html("");


        var province = $('.filterProvince').filter(':checked').val();

        var allProvinces = [];
        if ($('#allProvinces').is(':checked') == true) {
            $.each($('[name="quality[]"'), function (key, val) {
                allProvinces.push($(this).val());
                console.log($(this).val());
            })
        }
        console.log(allProvinces);


        var schoolTypes = [];
        $('[name="schoolType[]"]:checked').each(function (i, e) {
            schoolTypes.push(e.value);
        });
        schoolTypes = schoolTypes.join(',');
        console.log(schoolTypes);


        var schoolLevels = [];
        $('[name="schoolLevels[]"]:checked').each(function (i, e) {
            schoolLevels.push(e.value);
        });
        schoolLevels = schoolLevels.join(',');

        console.log(schoolLevels);


        var items = $('#courseTree').tree('selectedItems');

        if (items) {
            var majorIds = [];
            for (i = 0; i < items.length; i++) {
                //majors += items[i].text + ",";
                majorIds.push(items[i].value);
            }
        }


        var items_select2 = $("#select2Major").val();
        if (items_select2) {
            majorIds = items_select2.split(",");

        }

        console.log(majorIds);

        var majorId = $('#selectedMajor').val();
        var is211 = $('#isTwoEleven').is(':checked');
        var is985 = $('#isNineEightFive').is(':checked');

        var threeYear = $('#threeYear').is(':checked');
        var fourYear = $('#fourYear').is(':checked');
        var independent = $('#independent').is(':checked');
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
        var postData = {
            // threeYear: threeYear,
            // fourYear: fourYear,
            //  independent: independent,
            //  majorIds: majors,
            majors: majorIds,
            province: province,
            schoolTypes: schoolTypes,
            schoolLevels: schoolLevels,
            is985: is985,
            is211: is211,
            allProvinces: allProvinces
        };
        $.post('/job/ajax-publish-to-schools', postData, function (data) {
            $('#schoolContainer').html(data.schools);
            $('#schoolFilterContainer').html(data.filter);

            $('#schoolListLoader').addClass('hide');


        }, 'json');
    }

    function submitRequestForStudents(id) {
        // var myRadio2 = $('input[name=schoolCheckbox]');

        var schoolArr = []
        $.each($('.selectSchoolStudents'), function () {
            if ($(this).is(':checked')) {
                schoolArr.push($(this).val())
            }

        });


        //  var province = myRadio2.filter(':checked').val();

        var schoolTypes = [];
        $('[name="schoolType[]"]:checked').each(function (i, e) {
            schoolTypes.push(e.value);
        });

        var schoolLevels = [];
        $('[name="schoolType[]"]:checked').each(function (i, e) {
            schoolLevels.push(e.value);
        });

        schoolLevels = schoolLevels.join(',');


        if (schoolArr.length == 0) {
            $('#studentContainer').html("");
            return false;
        }

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


        var items = $('#courseTree').tree('selectedItems');
        var majors = [];

        $.each(items, function (key, val) {

            majors.push(items[key].value);

        });

        console.log(majors);

        // var realMajorId = majorId.replace("major_", "");
        var postData = {schoolIds: schoolArr, 'majorIds': majors, is985: is985, is211: is211};
        $.post('/job/ajax-publish-to-students', postData, function (data) {
            $('#studentContainer').html(data.students);
            $('#schoolFilterContainer').html(data.filter);
        }, 'json');
    }


    /**
     *
     */
    function selectStudentsToPublish() {

        $('body').on('click', '#publishToStudentsBtn', function () {
            var students = [];
            $.each($('.selectStudentToPostJob'), function (key, val) {
                if ($(this).is(':checked')) {
                    students.push($(this).val());
                }
            })
            var postData = {
                students: students
            }
            $.post('/job/ajax-select-students', postData, function (data) {

                if (data.success) {
                    window.location.href = data.redirect;
                }

            }, 'json');
            console.log(students);
            return false;
        })

    }

    $(function () {

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        selectStudentsToPublish()


        $('body').on('click', '#checkAllSchools', function () {
            console.log($(this).is(':checked'));

            $('.selectSchools').prop('checked', $(this).prop("checked"));

            //  submitRequestForStudents();
        });

        $('body').on('click', '#selectAllStudents', function () {
            $('.selectStudentToPostJob').prop('checked', $(this).prop('checked'));
        })

        $('body').on('click', '#postToAllSchools', function () {
            $('#postToAllSchoolsForm').submit();
        });


        $('#demo_menu').easytree();
        $('body').on('click', '.majorItem', function () {
            var majorId = $(this).attr('id');
            var realMajorId = majorId.replace("major_", "");
            $('#selectedMajor').val(realMajorId);


            submitRequest();
        })


        $('body').on('change', '#isNineEightFive', function () {
            submitRequest();
        })


        $('body').on('change', '#isTwoEleven', function () {
            submitRequest();
        })

        $('body').on('change', '#threeYear', function () {
            submitRequest();
        })

        $('body').on('change', '#fourYear', function () {
            submitRequest();
        })

        $('body').on('change', '#independent', function () {
            submitRequest();
        })
//        $('body').on('change', '.province', function () {
//            submitRequest();
//        });

        $('body').on('click', '.filterProvince', function () {
            $('#allProvinces').attr('checked', false);
            submitRequest();
        });

        $('body').on('click', '.filterSchoolType', function () {

            submitRequest();
        });

        $('body').on('click', '.filterSchoolLevel', function () {

            submitRequest();
        });

        $('body').on('click', "#allProvinces", function () {
            $('.filterProvince').attr('checked', false);
            submitRequest();
        })


        $('body').on('click', "#noProvinces", function () {
            $('input:radio[name=province]:checked').prop('checked', false).checkboxradio("refresh");
            submitRequest();
            //return false;
        })


        //when check any school, the Publish to All Students checkboxes will be unchecked,
        // this is to ensure you can either publish jobs to schools or to students at a time
        $('body').on('change', ".selectSchools", function () {


            var items = $('#courseTree').tree('selectedItems');
            if (items.length == 0) {
                toastr.error("You must select a Major before continuing");
                return false;
            }


            $('.selectStudentToPostJob').attr('checked', false);

            var items = $('#courseTree').tree('selectedItems');
            var items_select2 = $("#select2Major").val();


            if ((items == "") && (items_select2 == "")) {
                // alert("please select or search at least one major");
            } else {
                //implement publish to all schools here
                //  alert("implement publish to all schools here");
            }


        })

        //when check any student, the Publish to All Schools checkboxes will be unchecked,
        // this is to ensure you can either publish jobs to schools or to students at a time
        $('body').on('change', ".selectStudentToPostJob", function () {
            $('.selectSchools').attr('checked', false);
        })


        $('body').on('change', ".schoolCheckbox", function () {


            var schoolIdArray = [];
            $.each($('.schoolCheckbox'), function (key, val) {
                if ($(this).is(':checked')) {
                    schoolIdArray.push(($(this).val()));
                }
            })


            var items = $('#courseTree').tree('selectedItems');
            var majors = [];
            for (i = 0; i < items.length; i++) {
                majors += items[i].value + ",";


            }
            console.log(majors);


            $('#studentContainer').html("");
            $('#studentListLoader').removeClass('hide');
            // var realMajorId = majorId.replace("major_", "");
            var postData = {'schoolIds': schoolIdArray, majors: majors};
            $.post('/job/ajax-publish-to-students', postData, function (data) {
                // $('#schoolContainer').html(data.schools);
                // $('#schoolFilterContainer').html(data.filter);
                $('#studentListLoader').addClass('hide');
                // $('#schoolListLoader').addClass('hide');
                $('#studentContainer').html(data.students);

            }, 'json');

            //return false;
        })


        $('body').on('click', ".selectSchoolStudents", function () {
            var items = $('#courseTree').tree('selectedItems');

            if (items.length == 0 && $('#dropDownSelectedMajors').val().length > 0) {

                toastr.error("You must select a Major before continuing");
                return false;
            }
            // $('input:radio[name=schoolCheckbox]:checked').prop('checked', false).checkboxradio("refresh");
            submitRequestForStudents();
            //return false;
        })
        $('body').on('click', '#clearFilters', function () {
            $('.input-lg').attr('checked', false);
            $(".select2-search-choice").remove();
            clearTree();

            $('#schoolContainer').html("");
            $('#studentContainer').html("");
            $('.filterProvince').attr('checked', false);
            return false;

        })


        var selectTwoMajor = $("#select2Major");
        selectTwoMajor.select2({
            multiple: 'multiple',
            ajax: {
                url: "/job/ajax-select2-select-major",
                dataType: 'json',
                data: function (term, page) {
                    return {
                        q: term // search term
                        //   schoolId: $('#school_id').val()

                    }
                },
                results: function (data) {
                    var myResults = [];
                    $.each(data, function (index, item) {
                        myResults.push({
                            'id': item.id,
                            'text': item.id + " " + item.text
                        });
                    });
                    return {
                        results: data
                    };
                }
            }
        })
        selectTwoMajor.on("change", function (e) {
            var i;
            var majors = $(this).val().split(",");

            console.log(majors);

            $('#studentContainer').html("");

            // $('#courseTree').ace_tree('closeAll');
            clearTree();

            var province = $('.filterProvince').filter(':checked').val()
            $('#schoolContainer').html("");
            $('#studentListLoader').removeClass('hide');

            var majorId = $('#selectedMajor').val();


            var is211 = $('#isTwoEleven').is(':checked');
            console.log(is211);
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
            var schoolTypes = [];
            $('[name="schoolType[]"]:checked').each(function (i, e) {
                schoolTypes.push(e.value);
            });
            schoolTypes = schoolTypes.join(',');

            console.log(province);
            // var realMajorId = majorId.replace("major_", "");
            var postData = {
                schoolTypes: schoolTypes,
                'majors': majors,
                province: province,
                is985: is985,
                is211: is211
            };


            // $.post('/job/ajax-publish-to-students', postData, function (data) {
            $.post('/job/ajax-publish-to-schools', postData, function (data) {
                $('#schoolContainer').html(data.schools);
                // $('#schoolFilterContainer').html(data.filter);
                //   $('#studentContainer').html(data.students);
                $('#studentListLoader').addClass('hide');
            }, 'json');
        });


        <?
        // Used in the drop down selection of majors
        if ($majorId) {?>
        var i;
        var majors = '<?=$majorId;?>';


        var majorArr = [];

        if (majors.indexOf(',') > -1) {
            majorArr = majors.split(',');
        } else {
            majorArr.push(majors);
        }

        console.log(majorArr);

        $('#studentContainer').html("");

        // $('#courseTree').ace_tree('closeAll');
        clearTree();

        var province = $('.filterProvince').filter(':checked').val()
        $('#schoolContainer').html("");
        $('#studentListLoader').removeClass('hide');

        var majorId = $('#selectedMajor').val();


        var is211 = $('#isTwoEleven').is(':checked');
        console.log(is211);
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
        var schoolTypes = [];
        $('[name="schoolType[]"]:checked').each(function (i, e) {
            schoolTypes.push(e.value);
        });
        schoolTypes = schoolTypes.join(',');

        console.log(province);
        // var realMajorId = majorId.replace("major_", "");
        var postData = {
            schoolTypes: schoolTypes,
            'majors': majorArr,
            province: province,
            is985: is985,
            is211: is211
        };


        // $.post('/job/ajax-publish-to-students', postData, function (data) {
        $.post('/job/ajax-publish-to-schools', postData, function (data) {
            $('#schoolContainer').html(data.schools);
            // $('#schoolFilterContainer').html(data.filter);
            //   $('#studentContainer').html(data.students);
            $('#studentListLoader').addClass('hide');
        }, 'json');

        <?}?>

    })


</script>