<?php

require_once 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('./img/LS-1080.jpg');
$image->rotate(45)->resize(200,null, function ($image){
    $image->aspectRatio();
});

$wtImage = Image::make('./img/wt.jpg');
$wtImage->resize(10,10, function ($wtImage){
    $wtImage->aspectRatio();
});

$image->insert($wtImage);
$image->save('rotated.jpg');