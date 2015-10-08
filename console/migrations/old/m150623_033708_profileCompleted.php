<?php

use yii\db\Schema;
use yii\db\Migration;

class m150623_033708_profileCompleted extends Migration
{
    public function up()
    {
$this->addColumn('student','completed_profile','int(1)');
    }

    public function down()
    {
        echo "m150623_033708_profileCompleted cannot be reverted.\n";

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
