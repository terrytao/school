<?php

use yii\db\Schema;
use yii\db\Migration;

class m150625_164235_schoolmajor3 extends Migration
{
    public function up()
    {
        $this->execute("
            alter table school_major ADD major_level VARCHAR (10)
        ");
    }

    public function down()
    {
        echo "m150625_164235_schoolmajor3 cannot be reverted.\n";

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
