<?php

use yii\db\Schema;
use yii\db\Migration;

class m150707_134503_jobPosting extends Migration
{
    public function up()
    {
        $this->execute("alter table job_posting DROP to_school, drop to_major, drop to_student");
    }

    public function down()
    {
        echo "m150707_134503_jobPosting cannot be reverted.\n";

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
