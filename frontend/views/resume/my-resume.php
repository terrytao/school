<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ResumeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<?
$this-> title  =  'Resumes';
$this->params['breadcrumbs'][]  = [];
?>

<style type="text/css">


    .btn-group.btn-block {
        display: table;
    }

    .btn-group.btn-block > .btn {
        display: table-cell;
    }
</style>


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

    /*
    if (!('#button').hasAttr('disabled'))
        $('#button').attr('onclick', 'someFunction();');
    else
        $('#button').removeattr('onclick');
        */
</script>



<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Resumes
        </div>
        <div class="panel-body">
            <div class="btn-group btn-group-vertical">

                <?= Html::a('Create New Resume', ['create-resume-title'], ['class' => 'btn btn-success']) ?>

                <?= Html::a('Sample Resume', ['view-resume', 'resumeId' => 15], ['class' => 'btn btn-danger']) ?>
                <? //= Yii::$app->session->get('studentId') ?>

            </div>
            <?
            $i=1;
            foreach ($model as $resume) { ?>

                <div class="modal-body no-padding">
                    <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                        <thead>
                        <tr>
                            <th><?= "resume " . $i.":  ". $resume->resume_title;  $i++;?></th>
                            <th><?=  Html::a('Preview',['view-resume', 'resumeId'=>$resume->resume_id], ['class'=>'btn btn-success'])?></th>
                            <th><?=  Html::a('Delete', ['delete', 'resumeId'=>$resume->resume_id,

                                ], ['class'=>'btn btn-danger','data-confirm' => Yii::t('yii', '你确认要删除这个简历吗?'),])?></th>

                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>
                                About Me
                            </td>
                            <td> <a href="#" data-toggle="popover" title="hi" data-content="Student Id is "
                                    class="btn btn-primary">编辑
                                    </a></th></td>
                            <td><a href="#" data-toggle="popover" title="hi" data-content="Student Id is "
                                   class="btn btn-danger">预览
                                    </a></th></td>

                        </tr>

                        <tr>
                            <td>
                                <a href="#">My Interests</a>
                            </td>
                            <td>


                            <?= Html::a($resume->resumeInterests? 'Edit ' :' Add',
                                $resume->resumeInterests? ['resume-interest/index', 'resumeId' => $resume->resume_id]:
                                ['resume-interest/create','resumeId'=>$resume->resume_id],
                                ['class' => 'btn btn-success']) ?>

                            </td>
                            <td>

                            <?= Html::a(
                                '预览',['resume-interest/preview', 'resumeId' => $resume->resume_id],
                                $resume->resumeInterests?['class' => 'btn btn-success']:['class' => 'btn btn-success disabled']

                                 ) ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#">Core Courses</a>


                            </td>
                            <td><?= Html::a($resume->resumeCourses ? 'Edit    ' : '     Add     ',
                                    $resume->resumeCourses ? ['/resume-courses/update', 'resumeId' => $resume->resume_id] : ['/resume-courses/create'],
                                    $resume->resumeCourses ? ['class' => ' btn btn-primary'] : ['class' => ' btn btn-success']) ?></td>
                            <td>4,400</td>

                        </tr>

                        <tr>
                            <td>
                                <a href="#">My Awards</a>
                            </td>
                            <td>$75</td>
                            <td>6,500</td>

                        </tr>

                        <tr>
                            <td>
                                <a href="#">My Projects and Experiences</a>
                            </td>
                            <td>$55</td>
                            <td>4,250</td>

                        </tr>

                        <tr>
                            <td>
                                我的照片和作品
                            </td>
                            <td><a href="#" data-toggle="popover" title="hi" data-content="Student Id is "
                                class="btn btn-success">添加
                                </a></th></td>
                            <td><a href="#" data-toggle="popover" title="hi" data-content="Student Id is "
                                   class="btn btn-danger">预览
                                </a></th></td>

                        </tr>
                        </tbody>
                    </table>
                </div>


               <div>

               </div>

            <? } ?>
        </div>
    </div>

    <div class="modal-body no-padding">
        <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
            <thead>
            <tr>
                <th>Domain</th>
                <th>Price</th>
                <th>Clicks</th>

                <th>
                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                    Update
                </th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>
                    <a href="#">ace.com</a>
                </td>
                <td>$45</td>
                <td>3,330</td>
                <td>Feb 12</td>
            </tr>

            <tr>
                <td>
                    <a href="#">base.com</a>
                </td>
                <td>$35</td>
                <td>2,595</td>
                <td>Feb 18</td>
            </tr>

            <tr>
                <td>
                    <a href="#">max.com</a>
                </td>
                <td>$60</td>
                <td>4,400</td>
                <td>Mar 11</td>
            </tr>

            <tr>
                <td>
                    <a href="#">best.com</a>
                </td>
                <td>$75</td>
                <td>6,500</td>
                <td>Apr 03</td>
            </tr>

            <tr>
                <td>
                    <a href="#">pro.com</a>
                </td>
                <td>$55</td>
                <td>4,250</td>
                <td>Jan 21</td>
            </tr>
            </tbody>
        </table>
    </div>

