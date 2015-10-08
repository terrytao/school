<?php

use yii\db\Schema;
use yii\db\Migration;

class m150628_221237_resume1 extends Migration
{
    public function up()
    {
        $this->execute("
            alter table resume convert to character set utf8 collate utf8_unicode_ci;
        ");
    }

    public function down()
    {
        echo "m150628_221237_resume1 cannot be reverted.\n";

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
