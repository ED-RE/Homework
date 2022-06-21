<?php

class m220621_104631_add_newIdColumn_frameworks_table extends CDbMigration
{
	public function up()
	{
        $this->addColumn('frameworks', 'id', 'pk');
	}

	public function down()
	{
        $this->dropColumn('frameworks', 'id');
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