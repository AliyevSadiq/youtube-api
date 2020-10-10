<?php


namespace app\components\actions\video;


use app\models\Youtube;
use yii\base\Action;
use yii\web\HttpException;

class CategoryAction extends Action
{

    public function run($id){
        $youtube=new Youtube();


        $youtube_items = $youtube->getVideosByCategory($id)->getItems();

        $video_data=[];
        if(!empty($youtube_items)) {
            foreach ($youtube_items as $items) {
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
        }else{
            throw new HttpException('404','NOT FOUND');
        }

        return $this->controller->render('index',compact('video_data'));
    }

}