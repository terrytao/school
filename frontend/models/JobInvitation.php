<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "job_invitations".
 *
 * @property string $job_invitation_id
 * @property string $student_id
 * @property string $job_posting_id
 * @property string $date_created
 */
class JobInvitation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'job_invitations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'job_posting_id'], 'integer'],
            [['date_created'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'job_invitation_id' => 'Job Invitation ID',
            'student_id' => 'Student ID',
            'job_posting_id' => 'Job Posting ID',
            'date_created' => 'Date Created',
        ];
    }
}
