<?php


namespace app\components\actions\video;


use app\models\Youtube;
use yii\base\Action;
use yii\web\HttpException;

class ChanelAction extends Action
{

    public function run($id){
        $youtube=new Youtube();
        if(!empty($id)){
            $chanel_list=$youtube->getVideosByChanel($id,20);

            if(!empty($chanel_list)){
                $video_data=[];


                foreach ($chanel_list as $chanel){
                    if(!empty($chanel['id']['videoId'])){
                    $statistics=$youtube->videosByIds($chanel['id']['videoId'])->
                    getItems()[0]->getStatistics();
                    $contentDetails=$youtube->videosByIds($chanel['id']['videoId'])->
                    getItems()[0]->getContentDetails();
                    $video_data[]=[
                        'snippet' => [
                            'id'=>$chanel['id']['videoId'],
                            'title'=>$chanel['snippet']['title'],
                            'channelId'=>$chanel['snippet']['channelId'],
                            'channelTitle'=>$chanel['snippet']['channelTitle'],
                        ],
                        'statistics' => [
                            'viewCount' => $statistics['viewCount']
                        ],
                        'contentDetails' => [
                            'duration' => $youtube->convertTime($contentDetails['duration'])
                        ]
                    ];
                }else{
                        throw new HttpException('404','NOT FOUND');
                    }
                }
                $this->controller->view->title=$video_data[0]['snippet']['channelTitle'];
                return $this->controller->render('chanel',compact('video_data'));
            }else{
                throw new HttpException('404','CHANEL NOT FOUND');
            }

        }else{
            throw new HttpException('404','CHANEL NOT FOUND');
        }
    }

}