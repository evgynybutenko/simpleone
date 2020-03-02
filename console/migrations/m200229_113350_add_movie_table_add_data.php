<?php

use yii\db\Migration;

/**
 * Class m200229_113350_add_movie_table_add_data
 */
class m200229_113350_add_movie_table_add_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('movie', [
            'id' => '1',
            'name' => 'RED',
            'number_of_likes' => '779',
            'number_of_views' => '1208',
        ]);
        $this->insert('movie', [
            'id' => '2',
            'name' => 'HARRY POTTER',
            'number_of_likes' => '12779',
            'number_of_views' => '33108',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200229_113350_add_movie_table_add_data cannot be reverted.\n";

        return false;
    }
    */
}
