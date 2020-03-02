<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MovieJenreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movie Jenres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-jenre-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Movie Jenre', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'movie_id',
            'jenre_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
