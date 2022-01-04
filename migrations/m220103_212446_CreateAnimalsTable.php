<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%animals}}`.
 */
class m220103_212446_CreateAnimalsTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%animals}}', [
            'id' => $this->primaryKey()->notNull(),
            'type' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'age' => $this->integer()->notNull(),
            'created_at' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%animals}}');
    }
}
