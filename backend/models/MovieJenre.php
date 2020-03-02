<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "movie_jenre".
 *
 * @property int $movie_id
 * @property int $jenre_id
 *
 * @property Jenre $jenre
 * @property Movie $movie
 */
class MovieJenre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movie_jenre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['movie_id', 'jenre_id'], 'required'],
            [['movie_id', 'jenre_id'], 'integer'],
            [['movie_id', 'jenre_id'], 'unique', 'targetAttribute' => ['movie_id', 'jenre_id']],
            [['jenre_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jenre::className(), 'targetAttribute' => ['jenre_id' => 'id']],
            [['movie_id'], 'exist', 'skipOnError' => true, 'targetClass' => Movie::className(), 'targetAttribute' => ['movie_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'movie_id' => 'Movie ID',
            'jenre_id' => 'Jenre ID',
        ];
    }

    /**
     * Gets query for [[Jenre]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenre()
    {
        return $this->hasOne(Jenre::className(), ['id' => 'jenre_id']);
    }

    /**
     * Gets query for [[Movie]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovie()
    {
        return $this->hasOne(Movie::className(), ['id' => 'movie_id']);
    }
}
