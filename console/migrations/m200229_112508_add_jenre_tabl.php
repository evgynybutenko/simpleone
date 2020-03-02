<?php

use yii\db\Migration;

/**
 * Class m200229_112508_add_jenre_tabl
 */
class m200229_112508_add_jenre_tabl extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'jenre',
            [
                'id' => $this->primaryKey(),
                'name_of_jenre' => $this->string(255),
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('jenre');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200229_112508_add_jenre_tabl cannot be reverted.\n";

        return false;
    }
    */
}
