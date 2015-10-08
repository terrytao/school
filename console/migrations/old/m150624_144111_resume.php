<?php

use yii\db\Schema;
use yii\db\Migration;

class m150624_144111_resume extends Migration
{
    public function up()
    {
        $this->execute("
            alter table resume ADD number_of_views int(11)
        ");
    }

    public function down()
    {
        echo "m150624_144111_resume cannot be reverted.\n";

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
