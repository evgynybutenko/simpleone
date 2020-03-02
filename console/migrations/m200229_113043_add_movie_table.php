<?php

use yii\db\Migration;

/**
 * Class m200229_113043_add_movie_table
 */
class m200229_113043_add_movie_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'movie',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string(255),
                'number_of_likes' => $this->integer(255),
                'number_of_views' => $this->integer(255),
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('movie');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200229_113043_add_movie_table cannot be reverted.\n";

        return false;
    }
    */
}
