<?php


namespace app\models;


use Google_Client;
use Google_Service_YouTube;

class Youtube
{
    public $id; //id видео

    private $apiKey = 'AIzaSyBxrhiE1BpoV5_ZF_ZT4ubybrA5Fdwbny8';

    private $youtube;

    public function __construct()
    {
        $client = new Google_Client();
        $client->setDeveloperKey($this->apiKey);

        $this->youtube = new Google_Service_YouTube($client);

    }

    public function videosByIds($id)
    {



        return $this->youtube->videos->listVideos('snippet, statistics,contentDetails', [
            'id' => $id,
        ]);
    }


    public function getVideoList(){
        $result=$this->youtube->videos->listVideos('snippet,statistics,contentDetails',[
            'chart'=>'mostPopular',
            'maxResults'=>50,

        ]);
        return $result;
    }



    /** Получить список категорий видео с YouTube
     * https://developers.google.com/youtube/v3/docs/videoCategories
     * Возвращает массив с id категорий
     */
    public function getCategory($regionCode = 'US'){
        $result = $this->youtube->videoCategories->listVideoCategories('snippet',
            array('hl' => 'en_US', 'regionCode' => $regionCode))->getItems();

        return $result;
    }


    public function getVideosByChanel($chanelId,$count){
        $result=$this->youtube->search->listSearch('snippet',[
         'channelId'=>$chanelId,
         'maxResults'=>$count
        ]);
        return $result;
    }


       public function getVideosByCategory($id){
           $result=$this->youtube->videos->listVideos('snippet,statistics,contentDetails',[
               'chart'=>'mostPopular',
               'maxResults'=>50,
               'videoCategoryId'=>$id

           ]);
           return $result;
       }


    public function convertTime($time){
        $pattern = "/[A-Z]/i";
        $new_str=trim(preg_replace($pattern," ",$time));
        $new_pattern="/ /i";
        return preg_replace($new_pattern,":",$new_str);
    }



    public function convertPublishDate($data){
        $month_list=[
            '01'=>'January','02'=>'February','03'=>'March','04'=>'April',
            '05'=>'May','06'=>'June','07'=>'July','08'=>'August',
            '09'=>'September','10'=>'October','11'=>'November','12'=>'December',
        ];


        $date=substr($data,0,10);

        $arr=explode("-",$date);

        return $arr[2]." ".$month_list[$arr[1]]." ".$arr[0];
    }






















}