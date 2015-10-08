<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "resume_projects".
 *
 * @property string $resume_project_id
 * @property string $resume_id
 * @property string $project_name
 * @property string $project_description
 */
class ResumeProject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resume_project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resume_id'], 'integer'],
            [['project_name'], 'string', 'max' => 200],
            [['project_description'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'resume_project_id' => 'Resume Project ID',
            'resume_id' => 'Resume ID',
            'project_name' => 'Project Name',
            'project_description' => 'Project Description',
        ];
    }
}
