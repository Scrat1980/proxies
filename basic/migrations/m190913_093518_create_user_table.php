<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m190913_093518_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id'          => $this->primaryKey(),
            'username'    => $this->string(256),
            'password'    => $this->string(256),
            'auth_key'     => $this->string(256),
            'access_token' => $this->string(256),
            'role'        => $this->string(10),
        ]);

        $this->insert('{{%user}}', [
            'id'          => '100',
            'username'    => 'admin',
            'password'    => '21232f297a57a5a743894a0e4a801fc3',
            'auth_key'     => 'test100key',
            'access_token' => '100-token',
            'role'        => 'admin',
        ]);

        $this->insert('{{%user}}', [
            'id'          => '101',
            'username'    => 'demo',
            'password'    => 'fe01ce2a7fbac8fafaed7c982a04e229',
            'auth_key'     => 'test101key',
            'access_token' => '101-token',
            'role'        => 'editor'
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
