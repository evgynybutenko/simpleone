<?php
namespace backend\components;
use yii\base\Widget;

class Widget_for_comments extends Widget
{

    public $level;
    public $crated_at;
    public  $text;
    public function run()
    {
        return "<div style=\"padding-left: {$this->level}px; margin-top: 10px\">                                 
             <div style=\"background-color: whitesmoke; width: 400px;box-shadow: 0 0 10px rgba(0,0,0,0.5);
 padding: 10px;\">                                                                                        
             <b>Date of creation: </b>{$this->crated_at}</br>                                    
             <b>Comment: </b>{$this->text}</br>                                                   
             </div>                                                                                       
         </div>";
    }
}