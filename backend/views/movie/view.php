<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use backend\models\Comment;
use backend\components\Widget_for_comments;
/* @var $this yii\web\View */
/* @var $model backend\models\Movie */
/* @var $comments backend\models\Comment[] */

$comment = new Comment();

$arr_col = count($comments);
$arr = array();
$level_array = array();
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
    </br>


    <?php
    echo $arr_col;
    echo "<br>";
    for($i = 1; $i <= $arr_col; $i++)
    {
        $arr[$i] = $comments[$i - 1]->parent_id;
    }
    for($i = 1; $i <= $arr_col; $i++)
    {
        $level_array[$i] = 10 * $i;
    }
    print_r($arr);



       function buildComment_2($comments, $currentIndex, $level)
       {
            if ($currentIndex >= count($comments))
            {
                return;
            }

            $currentComment = $comments[$currentIndex];

            if ($currentComment->parent_id === null)
            {
                echo Widget_for_comments::widget(['level' => $level, 'crated_at' => $currentComment->created_at,
                    'text' => $currentComment->text]);
            }
            $children = $currentComment->comments;

            foreach($children as $key => $comment)
            {
                if ($comment->parent_id === $currentComment->id)
                {
                    echo Widget_for_comments::widget(['level' => $level+20, 'crated_at' => $comment->created_at,
                        'text' => $comment->text]);
                    buildComment_2($children, 0, $level+20);
                }
            }
            buildComment_2($comments, $currentIndex+1, $level);
       }
       buildComment_2($comments, 0, 10);
    ?>
</div>