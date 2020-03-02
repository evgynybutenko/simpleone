<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jenre */

$this->title = 'Update Jenre: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jenres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
