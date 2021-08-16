<?php
header("Content-Type: image/jpeg");
$image = imagecreatefromjpeg("certificado.jpg");
$gray = imagecolorallocate($image, 100, 100, 100);
$black = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 5, 430, 250, "CERTIFICADO", $black);
imagestring($image, 5, 400, 300, "Carlos Rhedney", $black);
imagestring($image, 3, 400, 320, utf8_decode("Concluído em: ").date("d/m/Y"), $black);
imagejpeg($image);
imagedestroy($image);
?>