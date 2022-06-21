<?php

class m220621_104301_drop_oldId_frameworks_table extends CDbMigration
{
    public function up()
    {
        $this->dropColumn('frameworks', 'id');
    }

    public function down()
    {
        $this->addColumn('frameworks', 'id', 'int');
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