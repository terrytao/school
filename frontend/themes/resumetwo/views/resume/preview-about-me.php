<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/28/15
 * Time: 2:45 PM
 */
use yii\helpers\Html;
use yii\grid\GridView;
?>


<div id="research" class="page">
    <div class="pageheader">

        <div class="headercontent">

            <div class="section-container">
                <h2 class="title">Research Summary</h2>

                <div class="row">
                    <div class="col-md-8">
                        <p>
                            <?= $model->self_introduction

                            ?>
                        </p>

                        <p>
                            <?= $model->self_introduction

                            ?>
                        </p>


                    </div>
                    <div class="col-md-4">
                        <div class="subtitle text-center">
                            <h3>Interests</h3>
                        </div>
                        <ul class="ul-boxed list-unstyled">
                            <li>Time, Money and Happiness</li>
                            <li>The Power of Story</li>
                            <li>目前南京海事部门仍在拖拽船</li>
                            <li>Cultural Psychology</li>
                            <li>Emotions, Goals, and Health</li>
                            <li>c救援人员需要将要将船体要将船体要将船体要将船体船体拖到水</li>
                        </ul>
                    </div>
                </div>
                <div><?= Html::a('Go Back', ['resume/create-resume-other-item', 'resumeId'=>$model->resume_id],['class'=>'btn-lg btn-success']); ?></div>
            </div>
        </div>
    </div>


</div>