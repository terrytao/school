<?php

use yii\db\Schema;
use yii\db\Migration;

class m150706_170127_provinceTable extends Migration
{
    public function up()
    {
        $this->execute("
CREATE TABLE `province` (
  `province_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `province` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`province_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `province` (`province_id`, `province`)
VALUES
	(1,'福建'),
	(2,'泉州'),
	(3,'吉林'),
	(4,'黑龙江'),
	(5,'哈尔滨'),
	(6,'上海'),
	(7,'江苏'),
	(8,'南京'),
	(9,'浙江'),
	(10,'公安'),
	(11,'安徽'),
	(12,'江西'),
	(13,'山东'),
	(14,'河南'),
	(15,'湖北'),
	(16,'武汉'),
	(17,'湖南'),
	(18,'长沙'),
	(19,'广东'),
	(20,'广州'),
	(21,'广西'),
	(22,'海南'),
	(23,'河北'),
	(24,'司法'),
	(25,'山西'),
	(26,'辽宁'),
	(27,'大连'),
	(28,'重庆'),
	(29,'四川'),
	(30,'成都'),
	(31,'广汉'),
	(32,'贵州'),
	(33,'天津'),
	(34,'北京'),
	(35,'卫生'),
	(36,'外交'),
	(37,'云南'),
	(38,'西藏'),
	(39,'陕西'),
	(40,'西安'),
	(41,'甘肃'),
	(42,'兰州'),
	(43,'青海'),
	(44,'银川'),
	(45,'宁夏'),
	(46,'新疆'),
	(47,'内蒙');


");
    }

    public function down()
    {
        echo "m150706_170127_provinceTable cannot be reverted.\n";

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
