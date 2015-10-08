<?php
/**
 * Created by PhpStorm.
 * User: terrytao
 * Date: 6/1/15
 * Time: 7:45 PM
 */
namespace frontend\controllers;

use backend\models\School;
use common\models\LoginForm;
use common\models\SchoolMajor;
use PDO;
use Yii;
use yii\db\Query;
use yii\helpers\Json;
use frontend\components\Controller;


class SchoolsController extends Controller
{
    public function actionSelectMajor()
    {
        $model = new LoginForm();
        return $this->render('select-major', ['model' => $model]);
    }

    /**
     * This is the function the autocomplete calls to get school names
     * @return string
     */
    public function actionAjaxFindSchools()
    {
        if (Yii::$app->request->getIsAjax()) {

            $schools = School::find()->filterWhere(['like', 'school_name', $_GET['term']])->all();

            $schoolsArr = ['id' => '', 'value' => ''];
            foreach ($schools as $school) {
                $schoolsArr[] = ['id' => $school->school_id,
                    'value' => $school->school_name . ' ' . $school->school_region . ' ' . $school->is_211

                ];
            }
            return Json::encode($schoolsArr);
        }
    }

    /**
     * saves the majorid
     */
    public function actionAjaxSaveMajor()
    {
        if (Yii::$app->request->getIsAjax()) {
            $schoolMajor = new SchoolMajor();
            $schoolMajor->attributes = $_POST['SchoolMajor'];
            //$schoolMajor->time_update = date("Y-m-d H:i:s");

            $schoolMajorRecord = SchoolMajor::find()->filterWhere(['school_id' => $schoolMajor->school_id, 'major_id' => $schoolMajor->major_id])
                ->one();
            if ($schoolMajorRecord) {
                $result['success'] = true;
                $result['msg'] = 'This Major already being added to this school';
            } else {
                //when the save method is called, afterSave is automatically run
                if ($schoolMajor->save()) {
                    $result['success'] = true;
                    $result['msg'] = 'School major save successfully';
                } else {
                    $result['success'] = false;
                    $result['msg'] = $schoolMajor->getErrors();
                }
            }
            return Json::encode($result);
        }
        //}
    }

    public function actionFindSchoolsByMajor($majorId)
    {

        //$major_id = $_GET['major_id'];
        Yii::$app->session->set('publishJobIdsMajorId', $_GET['majorId']);
        $majorId = Yii::$app->session->get('publishJobIdsMajorId');
        // $majorId = 820;
        $schoolMajors = SchoolMajor::find()->where(['major_id' => $majorId])->all();

//        $data['schoolMajors'] = $schoolMajors;
//        $data['majorId'] = $majorId;
//        return $this->render('find-schools-by-major', $data);

        return $this->render('find-schools-by-major', [
            'schoolMajors' => $schoolMajors,
            'majorId' => $majorId,
        ]);
    }


    public function actionFindSchools()
    {
        $q = $_GET['q'];
        $query = new Query;

        $query->select('school_name, school_id')
            ->from('school')
            ->filterWhere(['LIKE', 'school_name_combine', $q]);

        $command = $query->createCommand();

        $data = $command->queryAll();
        $out = [];
        foreach ($data as $d) {
            $out[] = ['id' => $d['school_id'], 'text' => $d['school_name']];
        }

        return Json::encode($out);

    }

    public function actionFindMajors($q = null)
    {
        $query = new Query;

        $query->select('major_name')
            ->from('major')
            ->where('major_name LIKE "%' . $q . '%"');

        $command = $query->createCommand();
        $data = $command->queryAll();
        $out = [];
        foreach ($data as $d) {
            $out[] = ['value' => $d['major_name']];
        }
        echo Json::encode($out);

    }
}