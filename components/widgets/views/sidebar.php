<div class="col-sm-3 col-md-2 sidebar">
    <div class="top-navigation">
        <div class="t-menu">MENU</div>
        <div class="t-img">
            <img src="/web/youtube/images/lines.png" alt="" />
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="drop-navigation drop-navigation">
        <ul class="nav nav-sidebar">
            <li class="active"><a href="/video" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <?php
            $i=1;
            foreach ($categoryItems as $category){
                if($i<=12){
                    $category_name=$category->getSnippet()['title'];
                    $category_id=$category->getId();
                ?>

                <li>
                    <a href="<?php echo \yii\helpers\Url::to(['video/category','id'=>$category_id])?>" class="menu">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        <?php echo $category_name;?>
                    </a>
                </li>
            <?php
                }
            $i++;
            }?>
            </ul>
        <!-- script-for-menu -->


    </div>
</div>