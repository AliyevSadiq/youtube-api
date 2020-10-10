<?php
/** @var \app\models\Youtube $youtube */
?>
    <div class="main-grids">

        <?php echo \app\components\widgets\VideoListWidget::widget(['videoItems'=>$video_data]);

        ?>
        <div class="clearfix"></div>
    </div>

