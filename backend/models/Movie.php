<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "movie".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $number_of_likes
 * @property int|null $number_of_views
 * @property int|null $year
 *
 * @property MovieJenre[] $movieJenres
 * @property Jenre[] $jenres
 */
class Movie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number_of_likes', 'number_of_views', 'year'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'number_of_likes' => 'Number Of Likes',
            'number_of_views' => 'Number Of Views',
            'year' => 'Year',
        ];
    }

    /**
     * Gets query for [[MovieJenres]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovieJenres()
    {
        return $this->hasMany(MovieJenre::className(), ['movie_id' => 'id']);
    }

    /**
     * Gets query for [[Jenres]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenres()
    {
        return $this->hasMany(Jenre::className(), ['id' => 'jenre_id'])->viaTable('movie_jenre', ['movie_id' => 'id']);
    }
}
