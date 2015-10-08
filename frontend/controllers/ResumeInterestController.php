<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/28/15
 * Time: 5:00 PM
 */

namespace frontend\controllers;

use frontend\models\ResumeInterest;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use frontend\components\Controller;
use frontend\components\ThemeHelper;


class ResumeInterestController extends Controller{

//    public function behaviors()
//    {
//        return [
//            'verb'=>[
//                'class'=>VerbFilter::className(),
//                'action'=>[
//                    'delete'=>['post'],
//                ],
//            ] ,
//        ];
//    }

    public function actionIndex($resumeId)
    {

        $dataProvider = New ActiveDataProvider([
            'query' => ResumeInterest::find()->where(['resume_id'=>$resumeId]),
        ]);

        return $this->render('index',[
            'dataProvider'=>$dataProvider,
            'resumeId'=>$resumeId,
        ]);
    }

    public function actionView($id)
    {
       return $this->render('view',[
           'model'=>$this->findModel($id),
       ]);

    }

    public function actionCreate($resumeId)
    {
        $model = New ResumeInterest();

        if ($model->load(Yii::$app->request->post())) {
            $model->resume_id = $resumeId;


            $model->save();

          return $this->redirect(['index', 'resumeId'=>$resumeId]);
         //   return Yii::$app->getResponse()->redirect(['/resume-interest/index','resumeId'=>32]);
        } else {

        return $this->render('create', [
            'model' => $model,
        ]);
        };

    }

    public function actionDelete($resumeInterestId, $resumeId)
    {
        $this->findModel($resumeInterestId)->delete();

        return $this->redirect(['index', 'resumeId'=>$resumeId]);
    }

    public function findModel($id)
    {
        if(($model = ResumeInterest::findOne($id)) !==  null){
            return $model;
        } else{
            throw new NotFoundHttpException('The requested page does not exist');
        }
    }

    public function actionPreviewMyInterest($resumeId)
    {
        $this->getView()->theme = ThemeHelper::load();
        $model = ResumeInterest::find()->where(['resume_id'=>$resumeId])->all();

        return $this->render('preview-my-interest',[
            'model'=>$model,
            'resumeId'=>$resumeId,
        ]);
    }
}