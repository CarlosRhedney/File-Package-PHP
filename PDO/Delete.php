<?php
$conn = new PDO("mysql:dbname=crud;host=localhost", "root", "");
$stmt = $conn->prepare("DELETE FROM usuarios WHERE id = :id");
$id = 50;
$stmt->bindParam(":id", $id);
$stmt->execute();
?>