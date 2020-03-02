<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MovieJenre */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-jenre-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'movie_id')->textInput() ?>

    <?= $form->field($model, 'jenre_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
