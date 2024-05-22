<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%join_req}}`.
 */
class m240522_062937_create_join_req_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%join_req}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->defaultValue(null)->collate('utf8mb4_unicode_ci'),
            'lastname' => $this->string(255)->defaultValue(null)->collate('utf8mb4_unicode_ci'),
            'email' => $this->string(255)->defaultValue(null)->collate('utf8mb4_unicode_ci'),
            'department' => $this->string(255)->defaultValue(null)->collate('utf8mb4_unicode_ci'),
            'message' => $this->text()->collate('utf8mb4_unicode_ci')->defaultValue(null),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%join_req}}');
    }
}
