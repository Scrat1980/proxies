<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%proxy}}`.
 */
class m190913_094706_create_proxy_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%proxy}}', [
            'id'   => $this->primaryKey(),
            'ip'   => $this->string(15),
            'port' => $this->integer(),
        ]);

        $this->insert('{{%proxy}}', [
            'id'   => '1',
            'ip'   => '111.11.111.9900',
            'port' => '2256',
        ]);

        $this->insert('{{%proxy}}', [
            'id'   => '2',
            'ip'   => '222.22.222.5555',
            'port' => '2237',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%proxy}}');
    }
}
