<?php
namespace frontend\components;

use yii\db\ActiveQuery;

class MySqlLog
{
    public static function logQuery(ActiveQuery $query, $message='')
    {
        date_default_timezone_set("America/Chicago");
        $query = $query->createCommand()->getRawSql() . "\n";

        $sqlLogFile = dirname(__DIR__) . '/../sql.log';
        $fh = fopen($sqlLogFile, 'a') or die("can't open file");

        $stringData = date("m-d-Y h:i:s a") . "\n";
        $stringData .= $query . "\n";
        fwrite($fh, $stringData);

        fclose($fh);
    }
}