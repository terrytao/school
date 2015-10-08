<?php

use yii\db\Schema;
use yii\db\Migration;

class m150714_164446_schoolMajorT5 extends Migration
{
    public function up()
    {
        $this->execute("

        DROP TABLE IF EXISTS `school_major`;
       CREATE TABLE `school_major` (
  `school_major_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `major_name` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `major_id` int(11) DEFAULT NULL,
  `time_created` datetime DEFAULT NULL,
  `time_updated` datetime DEFAULT NULL,
  `number_of_male_student` int(8) DEFAULT NULL,
  `number_of_female_student` int(8) DEFAULT NULL,
  `international` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `school_level` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `major_level` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`school_major_id`)
) ENGINE=InnoDB AUTO_INCREMENT=84296 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

        ");

    }

    public function down()
    {
        echo "m150714_164446_schoolMajorT5 cannot be reverted.\n";

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
