<div class="show-top-grids">


    <?php



         echo \app\components\widgets\VideoDetailWidgets::widget(['videoItem'=>$video_data[0]]);

          echo \app\components\widgets\ChanelVideosWidget::widget(['channelId'=>$video_data[0]['snippet']['channelId']]);
    ?>



    <div class="clearfix"> </div>
</div>