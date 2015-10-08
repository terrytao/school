<?php

use yii\db\Schema;
use yii\db\Migration;

class m150626_163317_student extends Migration
{
    public function up()
    {
        $this->execute("
            alter table student ADD born_year INT (4),
            ADD profile_photo VARCHAR (200),
            ADD profile_introduction VARCHAR (1000),
            ADD profile_email VARCHAR (100),
            ADD profile_qq VARCHAR (20),
            ADD profile_wechat VARCHAR (30),
            ADD profile_more_me VARCHAR (1000)
        ");
    }

    public function down()
    {
        echo "m150626_163317_student cannot be reverted.\n";

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
