<?php


namespace common\models;

use yii\db\ActiveRecord;

class Film extends ActiveRecord
{
    public static function tableName()
    {
        return 'film';
    }
}