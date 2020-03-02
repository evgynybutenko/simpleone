<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jenre */

$this->title = 'Create Jenre';
$this->params['breadcrumbs'][] = ['label' => 'Jenres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenre-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
