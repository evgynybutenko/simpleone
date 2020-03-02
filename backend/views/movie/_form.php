<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Movie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_of_likes')->textInput() ?>

    <?= $form->field($model, 'number_of_views')->textInput() ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
