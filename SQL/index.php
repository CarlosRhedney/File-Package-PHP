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

//$login = new Usuario();
//$login->login("Carlos Rhedney", "twisterpsa@hotmail.com");
//echo $login;

//$ins = new Usuario();
//$ins->setUser("Megie Simpson");
//$ins->setMail("magie@hotmail.com");
//$ins->setPhone("987654312");
//$ins->insert();
//echo $ins;

//$upd = new Usuario();
//$upd->loadById(59);
//$upd->update("Maggie Simpson", "maggie@hotmail.com", "912345678");
//echo $upd;

$del = new Usuario();
$del->loadById(60);
$del->delete();
echo $del;
?>