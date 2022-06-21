<?php

use Illuminate\Support\Facades\Schema;

class m220620_112213_create_frameworks_table extends CDbMigration
{
    public function up()
    {
        $this->createTable('Frameworks', [
            'id' => 'int',
            'title' => 'string',
            'content' => 'text',
        ]);
    }

    public function down()
    {
        $this->dropTable('Frameworks');
//		echo "m220620_112213_create_frameworks_table does not support migration down.\n";
//		return false;
    }

    /*
    // Use safeUp/safeDown to do migration with transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}