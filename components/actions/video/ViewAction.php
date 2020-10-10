<?php


namespace app\components\actions\video;


use app\models\Youtube;
use yii\base\Action;
use yii\web\HttpException;

class ViewAction extends Action
{

    public function run($id){
        $youtube=new Youtube();



        $items=$youtube->videosByIds($id)->getItems()[0];
        if(!empty($id) && !empty($items)) {
            $video_data = [];
            $snippet = $items->getSnippet();
            $statistics = $items->getStatistics();

            $video_data[] = [
                'snippet' => [
                    'id' => $items->getId(),
                    'title' => $snippet['title'],
                    'channelId' => $snippet['channelId'],
                    'publishedAt' =>$youtube->convertPublishDate($snippet['publishedAt']),
                    'description' => $snippet['description']
                ],
                'statistics' => [
                    'commentCount' => $statistics['commentCount'],
                    'likeCount' => $statistics['likeCount'],
                    'viewCount' => $statistics['viewCount'],
                ],

            ];
            $this->controller->view->title=$video_data[0]['snippet']['title'];
            return $this->controller->render('view', compact('video_data'));
        }else{
            throw new HttpException('404','not found');
        }
    }

}