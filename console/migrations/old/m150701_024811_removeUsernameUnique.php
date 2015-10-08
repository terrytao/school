<?php

use yii\db\Schema;
use yii\db\Migration;

class m150701_024811_removeUsernameUnique extends Migration
{
    public function up()
    {
        $this->execute("alter table user drop index user_unique_username;");
    }

    public function down()
    {
        echo "m150701_024811_removeUsernameUnique cannot be reverted.\n";

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
