<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "resume_courses".
 *
 * @property string $resume_course_id
 * @property string $resume_id
 * @property string $content
 *
 * @property Resume $resume
 */
class ResumeCourse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resume_course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resume_id'], 'integer'],
            [['content'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'resume_course_id' => 'Resume Course ID',
            'resume_id' => 'Resume ID',
            'content' => 'Content',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResume()
    {
        return $this->hasOne(Resume::className(), ['resume_id' => 'resume_id']);
    }
}
