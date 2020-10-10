<?php


use yii\helpers\Url;
?>


<div class="recommended">
    <div class="recommended-grids">



        <div  id="top" class="callbacks_container">
            <ul class="rslides" >
                <li>
                    <div class="animated-grids">
                        <?php
                        $i=1;
                        foreach ($videoItems as $items){?>
                        <div class="col-md-3 resent-grid recommended-grid slider-first">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="<?php echo Url::to(['video/view','id'=>$items['snippet']['id']]);?>">
                                    <?php echo \yii\helpers\Html::img(
                                            "https://img.youtube.com/vi/{$items['snippet']['id']}/0.jpg",
                                            ['alt'=>$items['snippet']['title']]
                                    )?>

                                </a>
                                <div class="time small-time slider-time">
                                    <p><?php echo $items['contentDetails']['duration'];?></p>
                                </div>
                                <div class="clck small-clck">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info">
                                <h5>
                                    <a href="<?php echo Url::to(['video/view','id'=>$items['snippet']['id']]);?>" class="title">
                                        <?php echo $items['snippet']['title'];?>
                                    </a>
                                </h5>
                                <div class="slid-bottom-grids">
                                    <div class="slid-bottom-grid">
                                        <p class="author author-info">
                                            <a href="<?php echo Url::to(['video/chanel','id'=>$items['snippet']['channelId']]);?>" class="author">
                                                <?php echo $items['snippet']['channelTitle'];?>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="slid-bottom-grid slid-bottom-right">
                                        <p class="views views-info">
                                            <?php echo $items['statistics']['viewCount'] ?> views</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>

                         <?php

                          if($i%4==0){
                           echo '<div class="clearfix"> </div>';
                          }


                         $i++;
                         }?>

                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>