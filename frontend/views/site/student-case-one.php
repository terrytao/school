<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 7/4/15
 * Time: 10:55 PM
 */
use yii\helpers\Html;
?>
<div class="container">
    <?= Html::a('案例1，我是这么申请工作的', '#', ['class'=>'btn btn-success']); ?>
    <div class="well">案例1： 我们是深圳一家软件公司，想招两名本科应届生，计算机专业，我不想在一般招聘网站发布广告， 因为会收到大量不符合要求的简历，我们没有那么多的人力来处理</div>


</div>

<div class="container">
    <?= Html::a('案例2，我是这么申请工作的', '#', ['class'=>'btn btn-primary']); ?>
    <?= Html::a('我的简历是这样的', ['/resume/view-resume', ['resumeId=>5']], ['class'=>'btn btn-primary']); ?>
    <?= Html::a('我的个人信息页面是这样的', '#', ['class'=>'btn btn-primary']); ?>
    <div class="well">案例1： 我们是深圳一家软件公司，想招两名本科应届生，计算机专业，我不想在一般招聘网站发布广告， 因为会收到大量不符合要求的简历，我们没有那么多的人力来处理</div>

</div>

<div class="container">
    <?= Html::a('案例3，我是这么申请工作的', '#', ['class'=>'btn btn-warning']); ?>
    <div class="well">案例1： 我们是深圳一家软件公司，想招两名本科应届生，计算机专业，我不想在一般招聘网站发布广告， 因为会收到大量不符合要求的简历，我们没有那么多的人力来处理</div>

</div>

<div class="container">
    <?= Html::a('案例4，我是这么申请工作的', '#', ['class'=>'btn btn-danger']); ?>
    <div class="well">案例1： 我们是深圳一家软件公司，想招两名本科应届生，计算机专业，我不想在一般招聘网站发布广告， 因为会收到大量不符合要求的简历，我们没有那么多的人力来处理</div>

</div>

<div class="container">
    <?= Html::a('案例5，我是这么申请工作的', '#', ['class'=>' btn  btn-yellow']); ?>
    <div class="well">案例1： 我们是深圳一家软件公司，想招两名本科应届生，计算机专业，我不想在一般招聘网站发布广告， 因为会收到大量不符合要求的简历，我们没有那么多的人力来处理</div>

</div>
