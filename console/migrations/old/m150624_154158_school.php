<?php

use yii\db\Schema;
use yii\db\Migration;

class m150624_154158_school extends Migration
{
    public function up()
    {
        $this->execute("
            alter table school
            ADD school_owner VARCHAR (40)
        ");
    }

    public function down()
    {
        echo "m150624_154158_school cannot be reverted.\n";

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
