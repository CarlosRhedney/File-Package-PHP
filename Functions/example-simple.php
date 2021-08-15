<?php
$texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
echo strtolower($texto);
echo "<br/>";
echo strtoupper($texto);
echo "<br/>";
echo ucfirst($texto);
echo "<br/>";
echo ucwords($texto);
echo "<br/>";
echo "A frase tem ".strlen($texto)." caracteres!";
echo "<br/>";
echo $texto2 = str_replace("amet", "Carlos", $texto);
echo "<br/>";
echo str_replace("consectetur", "Rhedney", $texto2);
echo "<br/>";
echo $_SERVER["HTTP_USER_AGENT"];
echo "<br/>";
echo $_SERVER["REMOTE_ADDR"];
?>