<?php


namespace app\components\widgets;


use app\models\Youtube;
use yii\base\Widget;

class ChanelVideosWidget extends Widget
{

    public $channelId;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }


    public function run()
    {
        parent::run(); // TODO: Change the autogenerated stub
    $youtube=new Youtube();
     $video_items=$youtube->getVideosByChanel($this->channelId,5);


    return $this->render('chanel_video',compact('video_items'));
    }



}