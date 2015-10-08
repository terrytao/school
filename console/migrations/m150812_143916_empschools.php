<?php

use yii\db\Schema;
use yii\db\Migration;

class m150812_143916_empschools extends Migration
{
    public function up()
    {
        $this->execute("

        CREATE TABLE `employer_job_school` (
  `employer_job_school_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employer_id` int(11) DEFAULT NULL,
  `job` varchar(500) DEFAULT NULL,
  `school` varchar(2000) DEFAULT NULL,
  `major` varchar(2000) DEFAULT NULL,
  `time_created` date DEFAULT NULL,
  `time_updated` double DEFAULT NULL,
  PRIMARY KEY (`employer_job_school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ");
    }

    public function down()
    {
        echo "m150812_143916_empschools cannot be reverted.\n";

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
