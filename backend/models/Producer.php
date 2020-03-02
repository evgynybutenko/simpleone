<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "producer".
 *
 * @property int $id
 * @property string|null $name_of_producer
 */
class Producer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_of_producer'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_of_producer' => 'Name Of Producer',
        ];
    }
}
