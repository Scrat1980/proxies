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
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%proxy}}');
    }
}
