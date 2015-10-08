<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/6/15
 * Time: 8:04 AM
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


use yii\helpers\Url;

?>

<?= Html::a('Create Employer Profile', ['employer-create-profile', 'employer_id' => $employer_profile->employer_id], ['class' => 'btn btn-primary']) ?>
<p>

</p>


<div class="btn-group btn-group-justified">

    <a href="update-student-profile.php" class="btn btn-primary">Edit My Profile</a>
    <a href="#" class="btn btn-success">My Offers</a>
</div>
<div class="btn-group btn-group-justified">
    <a href="../job/post-job" class="btn btn-warning">My Jobs</a>
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

<div>my dashboard</div>

<?= Html::a('my jobs', ['/job'], ['class' => 'btn btn-success']) ?>
<?= Html::a('my published jobs', ['my-published-jobs',], ['class' => 'btn btn-success']) ?>
<?= Html::a('responses to my jobs', ['job', 'employer_id' => $employer_profile->employer_id], ['class' => 'btn btn-primary']) ?>
<?= Html::a('my jobs', ['job', 'employer_id' => $employer_profile->employer_id], ['class' => 'btn btn-primary']) ?>
<?= Html::a('my jobs', ['job', 'employer_id' => $employer_profile->employer_id], ['class' => 'btn btn-primary']) ?>


