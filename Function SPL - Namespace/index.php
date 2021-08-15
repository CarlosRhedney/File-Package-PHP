<?php
require_once("config.php");
use Cliente\Cadastro;
$cad = new Cadastro();
$cad->setUser("Carlos Rhedney");
$cad->setMail("twisterpsa@hotmail.com");
$cad->setPhone("0000000000");
echo $cad;
echo "<br/>";
$cad->user();
echo "<br/>";
$cad->mail();
?>