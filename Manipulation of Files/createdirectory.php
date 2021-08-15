<?php
$image = "images";
if(!is_dir($image))
{
	mkdir($image);
	echo "Diretório $image criado com sucesso!";
}else
{
	rmdir($image);
	echo "Diretório $image removido com sucesso!";
}
?>