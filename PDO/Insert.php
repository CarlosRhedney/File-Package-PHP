<?php
$conn = new PDO("mysql:dbname=crud;host=localhost", "root", "");
$stmt = $conn->prepare("INSERT INTO usuarios(usuario, email, tel)VALUES(:user, :mail, :phone)");
$user = "Lisa Simpson";
$mail = "lisa@hotmail.com";
$phone = "975643128";
$stmt->bindParam(":user", $user);
$stmt->bindParam(":mail", $mail);
$stmt->bindParam(":phone", $phone);
$stmt->execute();
?>