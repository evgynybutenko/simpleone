<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use backend\models\Comment;
/* @var $this yii\web\View */
/* @var $model backend\models\Movie */
/* @var $comments backend\models\Comment[] */

$comment = new Comment();

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Movies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="movie-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'number_of_likes',
            'number_of_views',
            'year',
        ],
    ]) ?>
    <div class="comment-form">
        <p>
            <?php
                $form = ActiveForm::begin(['action' => [
                        'movie/comment',
                        'instance_name' => Comment::INSTANCE_TABLE_MOVIE,
                        'instance_record_id' => $model->id
                    ],
                        'options' => ['method' => 'post'],]);
                ?>
            <?= $form->field($comment, 'text')->textarea(['rows' => 3]) ?>
        </p>
        <p>
            <?= Html::submitButton('Add comment', ['class' => 'btn btn-class']) ?>
            <?php
                ActiveForm::end();
            ?>
        </p>
    </div>



    <?php
    foreach ($comments as $comment) {
        echo $comment->text.". | Author of comment: ";
        echo $comment->user->username;
        echo ". | Date of comment: ";
        echo $comment->created_at;
        echo "</br>";
    }
    ?>



</div>