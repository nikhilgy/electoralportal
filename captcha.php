<?php 


$change_time = md5(microtime());

$get_value = substr($change_time,0,6);

$create_image = imagecreate(120,60);

imagecolorallocate($create_image,192,192,192);

$text_color = imagecolorallocate($create_image,255,255,255);

imagestring($create_image,5,35,20,$get_value,$text_color);

header("Content-type:image/jpeg");

imagejpeg($create_image);
imagedestroy($create_image);
?>