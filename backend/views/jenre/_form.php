<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Jenre */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenre-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_of_jenre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
