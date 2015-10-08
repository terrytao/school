<?php

use yii\db\Schema;
use yii\db\Migration;

class m150703_151541_schoolDistributionTable extends Migration
{
    public function up()
    {
        $this->execute("
CREATE TABLE `school_distribution` (
  `school_distribution_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `school_province` varchar(50) DEFAULT NULL,
  `number_of_school` int(8) DEFAULT NULL,
  `percentage` decimal(10,4) DEFAULT NULL,
  PRIMARY KEY (`school_distribution_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `school_distribution` (`school_distribution_id`, `school_province`, `number_of_school`, `percentage`)
VALUES
	(1,'辽宁',137,0.0609),
	(2,'山西',133,0.0591),
	(3,'江苏',125,0.0555),
	(4,'山东',125,0.0555),
	(5,'广东',118,0.0524),
	(6,'河南',111,0.0493),
	(7,'安徽',107,0.0475),
	(8,'湖南',105,0.0466),
	(9,'湖北',95,0.0422),
	(10,'河北',93,0.0413),
	(11,'四川',84,0.0373),
	(12,'北京',80,0.0355),
	(13,'浙江',79,0.0351),
	(14,'陕西',78,0.0347),
	(15,'福建',76,0.0338),
	(16,'江西',75,0.0333),
	(17,'黑龙江',75,0.0333),
	(18,'上海',63,0.0280),
	(19,'广西',61,0.0271),
	(20,'云南',58,0.0258),
	(21,'重庆',53,0.0235),
	(22,'吉林',48,0.0213),
	(23,'内蒙',46,0.0204),
	(24,'天津',45,0.0200),
	(25,'贵州',41,0.0182),
	(26,'甘肃',36,0.0160),
	(27,'新疆',34,0.0151),
	(28,'海南',17,0.0076),
	(29,'宁夏',13,0.0058),
	(30,'青海',8,0.0036),
	(31,'西藏',6,0.0027),
	(32,'公安',5,0.0022),
	(33,'大连',3,0.0013),
	(34,'南京',3,0.0013),
	(35,'哈尔滨',2,0.0009),
	(36,'广州',2,0.0009),
	(37,'银川',1,0.0004),
	(38,'成都',1,0.0004),
	(39,'武汉',1,0.0004),
	(40,'泉州',1,0.0004),
	(41,'长沙',1,0.0004),
	(42,'外交',1,0.0004),
	(43,'广汉',1,0.0004),
	(44,'司法',1,0.0004),
	(45,'西安',1,0.0004),
	(46,'兰州',1,0.0004),
	(47,'卫生',1,0.0004);

");
    }

    public function down()
    {
        echo "m150703_151541_schoolDistributionTable cannot be reverted.\n";

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
