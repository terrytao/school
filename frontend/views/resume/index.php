<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ResumeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resumes';
$this->params['breadcrumbs'][] = $this->title;
?>

</p>
<div class="well well-lg"><h2>A nice crafted resume will attract more employers!</h2></div>

<div class="btn-group btn-group-justified">
    <a href="resume/index" class="btn btn-warning">My Jobs</a>
    <a href="#" class="btn btn-danger">My Interviews</a>
    <a href="../resume/index" class="btn btn-primary">My Resumes</a>
    <a href="#" class="btn btn-success">My Offers</a>
</div>

<div class="btn-group btn-group-justified">
    <a href="#" class="btn btn-warning">我的工作</a>
    <a href="#" class="btn btn-danger">我的面试</a>
    <a href="#" class="btn btn-primary">我的简历</a>
    <a href="#" class="btn btn-success">我的 Offer</a>
</div>
<div class="resume-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?
    if ($resume) { ?>
        <?= Html::a('Update your Resume', ['/resume/update', 'id' => $resume->resume_id]); ?>
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation">
                    <?= Html::a('Contact Info', ['/resume/update', 'id' => $resume->resume_id]); ?>
                </li>
                <li role="presentation">
                    <?= Html::a('Resume Courses', ['/resume-courses', 'resumeId' => $resume->resume_id]); ?>
                </li>
                <li role="presentation">
                    <?= Html::a('Projects', ['/resume-projects', 'resumeId' => $resume->resume_id]); ?>
                </li>
                <li role="presentation">
                    <?= Html::a('Photos', ['/resume-photos', 'resumeId' => $resume->resume_id]); ?>
                </li>
            </ul>
        </div>
        <?
    } else {
        ?>

        <?= Html::a('Create your Resume', ['/resume/create']); ?>
        <?
    }
    ?>

</div>
