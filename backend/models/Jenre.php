<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jenre".
 *
 * @property int $id
 * @property string|null $name_of_jenre
 *
 * @property MovieJenre[] $movieJenres
 * @property Movie[] $movies
 */
class Jenre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_of_jenre'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_of_jenre' => 'Name Of Jenre',
        ];
    }

    /**
     * Gets query for [[MovieJenres]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovieJenres()
    {
        return $this->hasMany(MovieJenre::className(), ['jenre_id' => 'id']);
    }

    /**
     * Gets query for [[Movies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovies()
    {
        return $this->hasMany(Movie::className(), ['id' => 'movie_id'])->viaTable('movie_jenre', ['jenre_id' => 'id']);
    }
}
