




<div class="col-sm-8 single-left">
    <div class="song">
        <div class="song-info">
            <h3><?php echo $videoItem['snippet']['title']?></h3>
        </div>
        <div class="video-grid">
            <iframe src="https://www.youtube.com/embed/<?php echo $videoItem['snippet']['id']?>" allowfullscreen></iframe>
        </div>
    </div>
    <div class="song-grid-right">
        <div class="share">

            <ul>

                <li title="like">
                    <a href="#" class="icon like"><?php echo $videoItem['statistics']['likeCount']?> </a>
                </li>
                <li title="comment"><a href="#" class="icon comment-icon"><?php echo $videoItem['statistics']['commentCount']?> </a></li>
                <li title="view" class="view"><?php echo $videoItem['statistics']['viewCount']?> </li>
            </ul>
        </div>
    </div>
    <div class="clearfix"> </div>
    <div class="published">


        <div class="load_more">
            <ul id="myList">
                <li style="display: block;">
                    <h4>Published on <?php echo $videoItem['snippet']['publishedAt'];?></h4>
                    <p><?php echo $videoItem['snippet']['description']?></p>
                </li>

            </ul>
        </div>
    </div>

</div>
