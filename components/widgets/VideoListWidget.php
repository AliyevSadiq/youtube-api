<?php


namespace app\components\widgets;


use yii\base\Widget;

class VideoListWidget extends Widget
{
   public $videoItems;






    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }


    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub

     return $this->render('video_list',['videoItems'=>$this->videoItems]);
    }

}