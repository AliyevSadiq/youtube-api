<?php


namespace app\assets;


use yii\web\AssetBundle;

class YoutubeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/web/youtube/css/bootstrap.min.css',
        '/web/youtube/css/dashboard.css',
        '/web/youtube/css/popuo-box.css',
        '/web/youtube/css/style.css',
    ];
    public $js = [
        '/web/youtube/js/jquery-1.11.1.min.js',
        '/web/youtube/js/modernizr.custom.min.js',
        '/web/youtube/js/jquery.magnific-popup.js',
        '/web/youtube/js/responsiveslides.min.js',
        '/web/youtube/js/bootstrap.min.js',
        '/web/youtube/js/main.js',
    ];


}