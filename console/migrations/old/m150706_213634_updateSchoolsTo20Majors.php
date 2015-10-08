<?php

use yii\db\Schema;
use yii\db\Migration;

class m150706_213634_updateSchoolsTo20Majors extends Migration
{
    public function up()
    {
        $this->execute("update school set number_of_major=20");
    }

    public function down()
    {
        echo "m150706_213634_updateSchoolsTo20Majors cannot be reverted.\n";

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
