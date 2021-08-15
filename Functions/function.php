<?php
function soma(float ...$valores):float{
	return array_sum($valores);
}
var_dump(soma(3, 4));
echo "<br/>";
echo soma(32, 22);
echo "<br/>";
echo soma(2.5, 3.3);
?>