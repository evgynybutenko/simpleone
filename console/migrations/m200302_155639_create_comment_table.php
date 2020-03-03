<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comment}}`.
 */
class m200302_155639_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(255),
            'text' => $this->text(),
            'instance_name' => $this->string(255),
            'instance_record_id' => $this->integer(255),
            'created_at' => $this->timestamp(),
            'parent_id' => $this->integer(255),
        ]);
        $this->addForeignKey(
            'fk-comment-user-id',
            'comment',
            'user_id',
            'user',
            'id',
            'cascade',
            'cascade'
        );
        $this->addForeignKey(
            'fk-comment-parent-id',
            'comment',
            'parent_id',
            'comment',
            'id',
            'cascade',
            'cascade'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comment');
    }
}
