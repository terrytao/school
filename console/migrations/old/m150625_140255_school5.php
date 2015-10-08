<?php

use yii\db\Schema;
use yii\db\Migration;

class m150625_140255_school5 extends Migration
{
    public function up()
    {
        $this->execute("
            alter table school Change school_region school_province VARCHAR (40),
            Change is_central school_city VARCHAR (40)
        ");
    }

    public function down()
    {
        echo "m150625_140255_school5 cannot be reverted.\n";

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
