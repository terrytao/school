<?php

namespace frontend\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "resume_photos".
 *
 * @property string $resume_photo_id
 * @property string $resume_id
 * @property string $photo_name
 * @property string $photo_title
 * @property string $photo_description
 *
 * @property Resume $resume
 */
class ResumePhoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resume_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resume_id'], 'integer'],
            [['photo_name', 'photo_title'], 'string', 'max' => 200],
            [['photo_description'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'resume_photo_id' => 'Resume Photo ID',
            'resume_id' => 'Resume ID',
            'photo_name' => 'Photo Name',
            'photo_title' => 'Photo Title',
            'photo_description' => 'Photo Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResume()
    {
        return $this->hasOne(Resume::className(), ['resume_id' => 'resume_id']);
    }

    public function getPhotoImg()
    {
        return Html::img(Yii::$app->urlManager->baseUrl . '/uploads/' . $this->photo_name,
            ['alt' => $this->photo_title]);
    }

    public function getPhotoPath()
    {
        return str_replace('index.php','',Yii::$app->urlManager->createAbsoluteUrl(  '/uploads/' . $this->photo_name));
    }

    public function deletePhoto()
    {
        $file = getcwd() . '/uploads/' . $this->photo_name;
        if (is_file($file)) {
            unlink($file);
        }

    }
}
