<?php

namespace backend\controllers;

use common\models\SchoolMajor;
use Yii;
use backend\models\School;
use backend\models\SchoolSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\FieldTestForm;

/**
 * SchoolController implements the CRUD actions for School model.
 */
class SchoolController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actionTest(){
        return "TEST";
    }
    /**
     * Lists all School models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new School();

        if ($model->load(Yii::$app->request->post()) && $model->save())
        {
            $model = new School(); //reset model
        }

      //  if (Yii::$app->getRequest()->isAjax) {
            $searchModel = new SchoolSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model'=>$model,
        ]);
    //}
    }

    /**
     * Displays a single School model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new School model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new School();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->school_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing School model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->school_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing School model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the School model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return School the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = School::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionField()
    {
        $model = New FieldTestForm();

        return $this->render('field',[
            'model'=>$model,
        ]);
    }

    public function actionSearchSchoolsByMajor($major_id)
    {
        $schools = SchoolMajor::find()->where(['major_id'=>$major_id]);

        return $this->render('search-schools-by-major',['schools'=>$schools]);
    }
}
