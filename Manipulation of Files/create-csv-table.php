<?php
require_once("config.php");
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM usuarios ORDER BY id");
$headers = array();
foreach($usuarios[0] as $key => $value)
{
	array_push($headers, $key);
}
$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(",", $headers)."\r\n");
foreach($usuarios as $row)
{
	$data = array();
	foreach($row as $key => $value)
	{
		array_push($data, $value);
	}
	fwrite($file, implode(",", $data)."\r\n");
}
fclose($file);
echo "Arquivo criado com sucesso!";
?>