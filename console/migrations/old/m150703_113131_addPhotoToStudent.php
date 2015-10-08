<?php

use yii\db\Schema;
use yii\db\Migration;

class m150703_113131_addPhotoToStudent extends Migration
{
    public function up()
    {
        $this->execute('ALTER TABLE student ADD profile_image VARCHAR (300)');
    }

    public function down()
    {
        echo "m150703_113131_addPhotoToStudent cannot be reverted.\n";

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
