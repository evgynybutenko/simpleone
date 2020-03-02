<?php

use yii\db\Migration;

/**
 * Class m200229_113957_add_data
 */
class m200229_113957_add_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('movie', [
            'id' => '3',
            'name' => 'TITANIC',
            'number_of_likes' => '2779',
            'number_of_views' => '323108',
        ]);
        $this->insert('movie', [
            'id' => '4',
            'name' => 'BATMAN',
            'number_of_likes' => '277229',
            'number_of_views' => '3123108',
        ]);
        $this->insert('movie', [
            'id' => '5',
            'name' => 'THE SILENCE of the LAMBS',
            'number_of_likes' => '245229',
            'number_of_views' => '86318',
        ]);
        $this->insert('jenre', [
            'id' => '1',
            'name_of_jenre' => 'Musicals/Dance',
        ]);
        $this->insert('jenre', [
            'id' => '2',
            'name_of_jenre' => 'Horror',
        ]);
        $this->insert('jenre', [
            'id' => '3',
            'name_of_jenre' => 'Crime/Gangster',
        ]);
        $this->insert('jenre', [
            'id' => '4',
            'name_of_jenre' => 'Romantic Comedy',
        ]);
        $this->insert('jenre', [
            'id' => '5',
            'name_of_jenre' => 'Fantasy',
        ]);
        $this->insert('producer', [
            'id' => '1',
            'name_of_producer' => 'Ryan Lewis',
        ]);
        $this->insert('producer', [
            'id' => '2',
            'name_of_producer' => 'Jeff Bhasker',
        ]);
        $this->insert('producer', [
            'id' => '3',
            'name_of_producer' => 'Mike Will Made It',
        ]);
        $this->insert('producer', [
            'id' => '4',
            'name_of_producer' => 'Max Martin',
        ]);
        $this->insert('producer', [
            'id' => '5',
            'name_of_producer' => 'Dann Huff',
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
        echo "m200229_113957_add_data cannot be reverted.\n";

        return false;
    }
    */
}
