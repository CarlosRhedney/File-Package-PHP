<?php
require_once("config.php");

//$sql = new Sql();
//$results = $sql->select("SELECT * FROM usuarios ORDER BY id");
//echo json_encode($results);

//$root = new Usuario();
//$root->loadById(5);
//echo $root;

//$list = Usuario::getList();
//echo json_encode($list);

//$search = Usuario::search("Car");
//echo json_encode($search);

$login = new Usuario();
$login->login("Carlos Rhedney", "twisterpsa@hotmail.com");
echo $login;
?>