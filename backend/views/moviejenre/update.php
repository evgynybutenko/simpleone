<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MovieJenre */

$this->title = 'Update Movie Jenre: ' . $model->movie_id;
$this->params['breadcrumbs'][] = ['label' => 'Movie Jenres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->movie_id, 'url' => ['view', 'movie_id' => $model->movie_id, 'jenre_id' => $model->jenre_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="movie-jenre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
