<?php

class m130710_132325_create_users_table extends CDbMigration
{
	public function up()
    {
        $this->createTable('ugos_users', array(
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'surname' => 'string NOT NULL',
            'email' => 'string NOT NULL',
            'password' => 'string NOT NULL',
        ));
    }
 
    public function down()
    {
        $this->dropTable('ugos_users');
    }
}