<?php
namespace backend\components;
use yii\base\Widget;

class Widget_for_comments extends Widget
{

    public $comments;
    public $comment;

    public function run()
    {

    function renderComment($level, $created_at, $text)
{
    return "<div style=\"padding-left: {$level}px; margin-top: 35px\">                                 
         <div style=\"background-color: whitesmoke; width: 400px;box-shadow: 0 0 10px rgba(0,0,0,0.5);
padding: 10px;\">                                                                                        
         <b>Date of creation: </b>{$created_at}</br>                                    
         <b>Comment: </b>{$text}</br>
         <button style=\"float: right\">Reply</button>                                                   
         </div>                                                                                       
     </div>";
    }

    function buildComment($comments, $currentComment, $level)
    {

        echo renderComment($level, $currentComment->created_at, $currentComment->text);

        foreach ($comments as $comment) {
            if ($comment->parent_id === $currentComment->id)
            {
                buildComment($comments, $comment, $level+20);
            }
        }
    }

    foreach ($this->comments as $comment) {
        if ($comment->parent_id === null)
        {
            buildComment($this->comments, $comment, 10);
        }
    }
    }
}