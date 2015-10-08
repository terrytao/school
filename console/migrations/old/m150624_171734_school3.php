<?php

use yii\db\Schema;
use yii\db\Migration;

class m150624_171734_school3 extends Migration
{
    public function up()
    {
        $this->execute("
            alter table school ADD school_code VARCHAR (20)
        ");
    }

    public function down()
    {
        echo "m150624_171734_school3 cannot be reverted.\n";

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
