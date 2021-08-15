<?php
$conn = new mysqli("localhost", "root", "", "crud");
if($conn->connect_error)
{
	echo "Erro ".$conn->connect_error;
}
$stmt = $conn->query("SELECT * FROM usuarios ORDER BY id");
$data = array();
while($results = $stmt->fetch_array(MYSQLI_ASSOC))
{
	array_push($data, $results);
}
echo json_encode($data);
?>