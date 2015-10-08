<?php

use yii\db\Schema;
use yii\db\Migration;

class m150622_185046_sqlFile extends Migration
{
    public function up()
    {
        \frontend\components\DLDatabaseHelper::import(dirname(__DIR__) . "/school.sql");

    }

    public function down()
    {
        echo "m150622_185046_sqlFile cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
