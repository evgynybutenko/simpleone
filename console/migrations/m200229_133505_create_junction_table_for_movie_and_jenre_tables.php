<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%movie_jenre}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%movie}}`
 * - `{{%jenre}}`
 */
class m200229_133505_create_junction_table_for_movie_and_jenre_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('movie_jenre', [
            'movie_id' => $this->integer(),
            'jenre_id' => $this->integer(),
            'PRIMARY KEY(movie_id, jenre_id)',
        ]);

        // creates index for column `movie_id`
        $this->createIndex(
            'idx-movie_jenre-movie_id',
            'movie_jenre',
            'movie_id'
        );

        // add foreign key for table `{{%movie}}`
        $this->addForeignKey(
            'fk-movie_jenre-movie_id',
            'movie_jenre',
            'movie_id',
            'movie',
            'id',
            'CASCADE'
        );

        // creates index for column `jenre_id`
        $this->createIndex(
            'idx-movie_jenre-jenre_id',
            'movie_jenre',
            'jenre_id'
        );

        // add foreign key for table `{{%jenre}}`
        $this->addForeignKey(
            'fk-movie_jenre-jenre_id',
            'movie_jenre',
            'jenre_id',
            'jenre',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%movie}}`
        $this->dropForeignKey(
            'fk-movie_jenre-movie_id',
            'movie_jenre'
        );

        // drops index for column `movie_id`
        $this->dropIndex(
            'idx-movie_jenre-movie_id',
            'movie_jenre'
        );

        // drops foreign key for table `{{%jenre}}`
        $this->dropForeignKey(
            'fk-movie_jenre-jenre_id',
            'movie_jenre'
        );

        // drops index for column `jenre_id`
        $this->dropIndex(
            'idx-movie_jenre-jenre_id',
            'movie_jenre'
        );

        $this->dropTable('movie_jenre');
    }
}
