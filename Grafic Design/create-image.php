<?php
header("Content-Type: image/png");
$image = imagecreate(300, 300);
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);
imagestring($image, 5, 90, 150, "Carlos Rhedney", $red);
imagepng($image);
imagedestroy($image);
?>