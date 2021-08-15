<?php
$conn = new mysqli("localhost", "root", "", "crud");
if($conn->connect_error)
{
	echo "Erro ".$conn->connect_error;
}
$stmt = $conn->prepare("INSERT INTO usuarios(usuario, email, tel)VALUES(?, ?, ?)");
$user = "Bart Simpson";
$mail = "bart@hotmail.com";
$phone = "921213443";
$stmt->bind_param("sss", $user, $mail, $phone);
$stmt->execute();
?>