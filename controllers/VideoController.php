<?php


namespace app\controllers;


use app\models\Youtube;
use yii\web\Controller;
use yii\web\HttpException;

class VideoController extends Controller
{

    public $layout='youtube_layout';

   public function actions()
   {
       return [
           'index'=>'app\components\actions\video\IndexAction',
           'view'=>'app\components\actions\video\ViewAction',
           'chanel'=>'app\components\actions\video\ChanelAction',
           'category'=>'app\components\actions\video\CategoryAction',
       ];
   }















    public function actionTest(){
        $youtube=new Youtube();
        $id='UClarhNTgYk5wuztsunOx2Cw';
        if(!empty($id)) {
            $chanel_list = $youtube->getVideosByChanel($id, 20);

         $video_items=$chanel_list->getItems();

         $id_items=[];

         foreach ($video_items as $item){
             $id_items[]=$item['id']['videoId'];
         }

          echo '<pre>';
         print_r($id_items);
          echo '</pre>';


        }
    }




}