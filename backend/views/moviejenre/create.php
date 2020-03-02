<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MovieJenre */

$this->title = 'Create Movie Jenre';
$this->params['breadcrumbs'][] = ['label' => 'Movie Jenres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-jenre-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
