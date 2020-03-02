<?php

use yii\db\Migration;

/**
 * Class m200229_112520_add_producer_tabl
 */
class m200229_112520_add_producer_tabl extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'producer',
            [
                'id' => $this->primaryKey(),
                'name_of_producer' => $this->string(255),
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('producer');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200229_112520_add_producer_tabl cannot be reverted.\n";

        return false;
    }
    */
}
