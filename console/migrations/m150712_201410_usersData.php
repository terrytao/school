<?php

use yii\db\Schema;
use yii\db\Migration;

class m150712_201410_usersData extends Migration
{
    public function up()
    {
        $pw1 = '$2y$10$vPzKveRYPpk5l5e0J2GXOuVG5FezOUYmlQlDz8A8ohwuZ3APXKGlS';
        $pw2 = '$2y$10$acwzoVDA/pjo.mu.Q4KUU.OM5KfvSlOh8BGCFXTOvpu5LIyGz92/u';
        $this->execute("INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`)
VALUES
	(4, '', 'petschephp@gmail.com', '".$pw1."', 'bjDTQaN5rA0HHuekgcaUFrIS3k3V9R0H', 1436730512, NULL, NULL, '192.168.10.1', 1436730491, 1436730512, 0),
	(5, '', 'kevin@tampaphp.com', '".$pw2."', 'LzeOZmqS0G68X1VjuNpZTciMtbP5fZJa', 1436730696, NULL, NULL, '192.168.10.1', 1436730499, 1436730696, 0);
");
    }

    public function down()
    {
        echo "m150712_201410_usersData cannot be reverted.\n";

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
