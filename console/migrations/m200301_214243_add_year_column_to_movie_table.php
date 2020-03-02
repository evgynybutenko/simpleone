<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `movie`.
 */
class m200301_214243_add_year_column_to_movie_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('movie', 'year', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('movie', 'year');
    }
}
