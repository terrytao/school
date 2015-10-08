<?php

use yii\db\Schema;
use yii\db\Migration;

class m150628_233745_interest extends Migration
{
    public function up()
    {
        $this->execute("
        CREATE TABLE `resume_interest` (
  `resume_interest_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resume_id` int(11) DEFAULT NULL,
  `interest` varchar(100) DEFAULT NULL,
  `time_create` datetime DEFAULT NULL,
  `time_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`resume_interest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ");
    }

    public function down()
    {
        echo "m150628_233745_interest cannot be reverted.\n";

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
