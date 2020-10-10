<?php
namespace app\components\actions\video;

use app\models\Youtube;
use yii\base\Action;

class IndexAction extends Action
{

    public function run(){
        $this->controller->view->title='VIDEO LIST';

        $youtube = new Youtube();
        $youtube_items = $youtube->getVideoList()->getItems();
        $video_data=[];
        foreach ($youtube_items as $items){
            $snippet = $items->getSnippet();

            $statistics = $items->getStatistics();
            $contentDetails = $items->getContentDetails();
            $video_data[] = [
                'snippet' => [
                    'id' => $items->getId(),
                    'title' => $snippet['title'],
                    'channelId' => $snippet['channelId'],
                    'channelTitle' => $snippet['channelTitle']
                ],
                'statistics' => [
                    'viewCount' => $statistics['viewCount']
                ],
                'contentDetails' => [
                    'duration' => $youtube->convertTime($contentDetails['duration'])
                ]
            ];
        }

        return $this->controller->render('index',compact('video_data'));
    }


}