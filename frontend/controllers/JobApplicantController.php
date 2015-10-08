<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/20/15
 * Time: 7:24 AM
 */

namespace frontend\controllers;


use frontend\models\JobApplicant;
use frontend\models\JobApplicantSearch;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use frontend\components\Controller;

class JobApplicantController extends Controller
{

    public function behaviors()
    {
        return [

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post']
                ]
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = New JobApplicantSearch();
        $dataProvide = $searchModel->searchByEmployer(\Yii::$app->request->queryParams, Yii::$app->session->get('employerId'));

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvide,
        ]);

    }

    public function actionApply($jobId)
    {
        return $this->render('apply');
    }

    public function actionUpdate($id)
    {


    }


    public function actionView($id)
    {


    }

    public function actionDelete($id)
    {

    }

    public function findModel($id)
    {

    }
}