<?php

use yii\db\Schema;
use yii\db\Migration;

class m150624_155240_school2 extends Migration
{
    public function up()
    {
        $this->execute("
            alter table school ADD year_founded INT(4)
        ");
    }

    public function down()
    {
        echo "m150624_155240_school2 cannot be reverted.\n";

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
