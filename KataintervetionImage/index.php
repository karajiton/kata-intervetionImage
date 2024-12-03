<?php
require __DIR__ . '/../vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\ImageManager;

$file_image = file_get_contents('./source/volando.jpeg');

$imageManager = ImageManager::gd();
$image = $imageManager-> read($file_image);
$image = $image->rotate(35, '#000000');

$image->save('imagenM.jpg');