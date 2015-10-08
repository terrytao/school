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
                            <?//= $model->self_introduction

                            ?>
                        </p>

                        <p>
                            <?//= $model->self_introduction

                            ?>
                        </p>


                    </div>
                    <div class="col-md-4">
                        <div class="subtitle text-center">
                            <h3>Interests</h3>
                        </div>
                        <ul class="ul-boxed list-unstyled">
                            <? foreach($model as $interest){ ?>
                            <li><?= $interest->interest ?></li>
                            <? } ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div><?= Html::a('Go Back', ['resume/create-resume-other-item', 'resumeId'=>$resumeId],['class'=>'btn-lg btn-success']); ?></div>
    </div>


</div>