<?php
$file = fopen("teste.txt", "w+");
fwrite($file, date("d/m/Y H:i:s"));
fclose($file);
unlink("teste.txt");
echo "Arquivo removido com sucesso!";
?>