<?php
/** @var \app\models\Youtube $youtube */


echo '<pre>';

print_r($youtube->videosByIds()->items[0]);
echo '</pre>';

