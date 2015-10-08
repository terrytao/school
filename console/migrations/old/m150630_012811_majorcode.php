<?php

use yii\db\Schema;
use yii\db\Migration;

class m150630_012811_majorcode extends Migration
{
    public function up()
    {
        $this->execute("alter table major convert to character set utf8 collate utf8_unicode_ci;");
    }

    public function down()
    {
        echo "m150630_012811_majorcode cannot be reverted.\n";

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
