<?php
$image = "027.jpg";
$base64 = base64_encode(file_get_contents($image));
$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileinfo->file($image);
$base64encode = "data:".$mimetype.";base64,".$base64;
?>
<a href="<?=$base64encode?>">Link</a>
<img src="<?=$base64encode?>">