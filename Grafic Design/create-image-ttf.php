<?php
header("Content-Type: image/jpeg");
$image = imagecreatefromjpeg("certificado.jpg");
$gray = imagecolorallocate($image, 100, 100, 100);
$black = imagecolorallocate($image, 0, 0, 0);
imagettftext($image, 32, 0,  430, 250, $black, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 400, 300, $black, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Carlos Rhedney");
imagestring($image, 3, 400, 320, utf8_decode("Concluído em: ").date("d/m/Y"), $black);
imagejpeg($image);
imagedestroy($image);
?>