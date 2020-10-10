<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;

use app\assets\YoutubeAsset;

YoutubeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><h1><img src="/web/youtube/images/logo.png" alt="logo" /></h1></a>
        </div>

        <div class="clearfix"> </div>
    </div>
</nav>

<?php
$youtube=new \app\models\Youtube();
echo \app\components\widgets\SidebarWidget::widget(['categoryItems'=>$youtube->getCategory()]);?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


<?php echo $content;?>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
