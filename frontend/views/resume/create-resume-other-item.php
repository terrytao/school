<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ResumeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<style type="text/css">
    .custom {
        width: 108px !important;
    }

    .span12 {
        -moz-box-shadow: 0 0 2px black;
        -webkit-box-shadow: 0 0 2px black;
        box-shadow: 0 0 2px black;
    }
</style>

<div class="container">

    <div id="a" title="Popover Header" data-content="Some content inside the popover">Toggle popover</div>
</div>

<script>
    var popover = $("#a").popover({
        trigger: 'hover',
        placement: 'bottom',
        html: 'true'
    }).on('show.bs.popover', function () {
        //I saw an answer here  with 'show.bs.modal' it is wrong, this is the correct,
        //also you can use   'shown.bs.popover to take actions AFTER the popover shown in screen.
        $.ajax({
            url: 'data.php',
            success: function (html) {
                html = 'hi';
                popover.attr('data-content', html);
            }
        });
    });
</script>


</p>


<div class="container">
    <div class="row">
        <div class="col-*-*"></div>
    </div>
    <div class="row">
        <div class="col-*-*"></div>
        <div class="col-*-*"></div>
        <div class="col-*-*"></div>
    </div>

</div>


<div class="resume-index">

    <div class="container-fluid">
        <div class="row">

            <? foreach ($model as $resume) { ?>

                <div class="col-md-12">
                    <div class="jumbotron">


                        <p>

                            <?= Html::a('Sample Resume 样板简历', ['view-resume', 'resumeId' => $resume->resume_id], ['class' => 'glyphicon btn btn-danger']) ?>


                        </p>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>


                    <div class="btn-group btn-group-justified">
                        <div class="container">

                            <?= Html::a($resume->resume_title, ['create'], ['class' => 'btn btn-warning']) ?>
                            <a href="#" data-toggle="popover" title="hi" data-content="Student Id is "
                               class="btn btn-primary custom">Preview Resume</a>
                            <a href="#" data-toggle="popover" title="hi" data-content="Student Id is "
                               class="btn btn-primary custom">Delete Resume</a>

                            <div class="clearfix"></div>

                        </div>


                    </div>

                    <div class="container">
                        <div>
                    <span><label class="label label-success" type="label">
                            About Me
                        </label></span>
                            <em><?= Html::a($resume->self_introduction ? ' Edit "AboutMe " ' : 'Add "AboutMe "',
                                    ['edit-about-me', 'resumeId' => $resume->resume_id],
                                    $resume->self_introduction ? ['class' => 'glyphicon btn btn-success glyphicon-edit'] : ['class' => 'glyphicon btn btn-success glyphicon-plus']

                                );


                                ?>
                            </em>

                            <?= Html::a($resume->self_introduction ? ' Preview "AboutMe"' : ' Preview AboutMe',
                                $resume->self_introduction ? ['preview-about-me', 'resumeId' => $resume->resume_id] : ['preview-about-me', 'resumeId' => $resume->resume_id],
                                $resume->self_introduction ? ['class' => 'glyphicon btn btn-success glyphicon-eye-open  '] : ['class' => 'glyphicon btn btn-success disabled']

                            );

                            ?>
                        </div>
                        <p></p>

                 <span><label class="label label-success" type="label">
                         My Interests
                     </label></span>

                        <em>
<!--                            --><?//= Html::a($resume->resumeInterest ? '  Edit Interest' : '  Add Interest',
//                                $resume->resumeInterest ? ['/resume-interest/index', 'resumeId' => $resume->resume_id] : ['/resume-interest/create', 'resumeId' => $resume->resume_id],
//                                $resume->resumeInterest ? ['class' => ' btn btn-primary custom glyphicon-edit'] : ['class' => ' glyphicon btn btn-success glyphicon-plus']) ?><!--</em>-->

                        <?//= Html::a(' Preview Interest', ['/resume-interest/preview-my-interest', 'resumeId' => $resume->resume_id],
                          //  $resume->resumeInterest ? ['class' => 'glyphicon btn btn-success glyphicon-eye-open'] : ['class' => 'glyphicon btn btn-success glyphicon-eye-open disabled']) ?>
                    </div>
                </div>

                <!--
                    <button class="btn btn-success" type="button">
                        <em class="glyphicon glyphicon-align-right"></em> 样板
                    </button>
                    -->
            <? } ?>
        </div>
        <br></br>


    </div>
</div>
</div>


</div>
