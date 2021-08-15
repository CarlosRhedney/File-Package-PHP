<?php
$conn = new PDO("mysql:dbname=crud;host=localhost", "root", "");
$stmt = $conn->prepare("UPDATE usuarios SET usuario = :user, email = :mail, tel = :phone WHERE id = :id");
$user = "Marge Simpson";
$mail = "marge@hotmail.com";
$phone = "964532718";
$id = 54;
$stmt->bindParam(":user", $user);
$stmt->bindParam(":mail", $mail);
$stmt->bindParam(":phone", $phone);
$stmt->bindParam(":id", $id);
$stmt->execute();
?>