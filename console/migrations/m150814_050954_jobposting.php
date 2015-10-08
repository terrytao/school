<?php

use yii\db\Schema;
use yii\db\Migration;

class m150814_050954_jobposting extends Migration
{
    public function up()
    {
        $this->execute("
         CREATE TABLE `job_posting_save` (
    `job_posting_save_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `school_major_student_id` int(11) DEFAULT NULL,
  `employer_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `to_school` varchar(500) DEFAULT NULL,
  `to_major` varchar(500) DEFAULT NULL,
  `to_student` varchar(500) DEFAULT NULL,
  `time_created` datetime DEFAULT NULL,
  `time_updated` datetime DEFAULT NULL,
  `school_id` int(8) DEFAULT NULL,
  `major_id` int(8) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `job_type` varchar(40) DEFAULT NULL,
  `number_of_application` int(8) DEFAULT NULL,
  PRIMARY KEY (`job_posting_save_id`)
) ENGINE=InnoDB AUTO_INCREMENT=502 DEFAULT CHARSET=latin1;
        ");


    }

    public function down()
    {
        echo "m150814_050954_jobposting cannot be reverted.\n";

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
