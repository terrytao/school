<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_052536_majors10 extends Migration
{
    public function up()
    {
        $this->execute("
            alter table major add major_name_keyword varchar(100)
        ");
    }

    public function down()
    {
        echo "m150729_052536_majors10 cannot be reverted.\n";

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
