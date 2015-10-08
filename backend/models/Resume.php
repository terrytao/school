<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "resume".
 *
 * @property integer $resume_id
 * @property integer $student_id
 * @property string $content
 */
class Resume extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resume';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['content'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'resume_id' => 'Resume ID',
            'student_id' => 'Student ID',
            'content' => 'Content',
        ];
    }
}
