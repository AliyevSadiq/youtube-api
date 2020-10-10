<?php

use yii\helpers\Html;
use yii\helpers\Url;


?>



<div class="col-md-4 single-right">
    <h3>Up Next</h3>
    <div class="single-grid-right">
        <?php

        foreach ($video_items as $item){
            ?>

        <div class="single-right-grids">
            <div class="col-md-4 single-right-grid-left">
                <a href="<?php echo Url::to(['video/view','id'=>$item['id']['videoId']]);?>">
                    <?php echo Html::img(
                        "https://img.youtube.com/vi/{$item['id']['videoId']}/1.jpg",
                        ['alt'=>$item['snippet']['title']]
                    )?>
                </a>
            </div>
            <div class="col-md-8 single-right-grid-right">
                <a href="<?php echo Url::to(['video/view','id'=>$item['id']['videoId']]);?>" class="title">
                    <?php echo $item['snippet']['title'];?>
                </a>
                <p class="author"><a href="<?php echo Url::to(['video/chanel','id'=>$item['snippet']['channelId']]);?>" class="author">
                        <?php echo $item['snippet']['channelTitle'];?></a></p>

            </div>
            <div class="clearfix"> </div>
        </div>
       <?php }?>
    </div>
</div>
