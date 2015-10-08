<?php

use yii\db\Schema;
use yii\db\Migration;

class m150625_141227_school6 extends Migration
{
    public function up()
    {
        $this->execute("
            truncate table school;
        ");

    }

    public function down()
    {
        echo "m150625_141227_school6 cannot be reverted.\n";

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
