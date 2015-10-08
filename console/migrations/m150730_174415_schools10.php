<?php

use yii\db\Schema;
use yii\db\Migration;

class m150730_174415_schools10 extends Migration
{
    public function up()
    {
        $this->execute("
            alter table school ADD number_of_student int(10)
        ");
    }

    public function down()
    {
        echo "m150730_174415_schools10 cannot be reverted.\n";

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
