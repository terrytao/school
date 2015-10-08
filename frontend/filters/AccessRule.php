<?php

namespace frontend\filters;

use Yii;
use yii\filters\AccessRule as BaseAccessRule;

class AccessRule extends BaseAccessRule
{

    /** @inheritdoc */
    protected function matchRole($user)
    {
        if (empty($this->roles)) {
            return true;
        }

        foreach ($this->roles as $role) {
            if ($role === '?') {
                if (Yii::$app->user->isGuest) {
                    return true;
                }
            } elseif ($role === '@') {
                if (!Yii::$app->user->isGuest) {
                    return true;
                }
            } elseif ($role === 'employer') {
                if (!Yii::$app->user->isGuest && Yii::$app->session->get('employerId')) {
                    return true;
                }
            } elseif ($role === 'student') {
                if (!Yii::$app->user->isGuest && Yii::$app->session->get('studentId')) {
                    return true;
                }
            }
        }

        return false;
    }
}