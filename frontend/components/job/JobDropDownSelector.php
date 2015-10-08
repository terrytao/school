<?php

namespace frontend\components\job;

class JobDropDownSelector
{
    /**
     * Creates CSV params
     * @param $existingMajorIds
     * @param $selectedParam
     * @return string
     */
    public static function addParam($existingMajorIds, $selectedParam)
    {
        if ($existingMajorIds) {
            return $existingMajorIds . ',' . $selectedParam;
        } else {
            return $selectedParam;
        }
    }
}