<?php

use yii\db\Schema;
use yii\db\Migration;

class m150627_132128_resume extends Migration
{
    public function up()
    {
        $this->execute("
            Alter table resume ADD resume_title VARCHAR (20)
        ");
    }

    public function down()
    {
        echo "m150627_132128_resume cannot be reverted.\n";

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
