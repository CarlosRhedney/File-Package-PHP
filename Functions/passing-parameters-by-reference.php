<?php
$a = 10;
function pass(&$a){
	$a += 50;
	return $a;
}
echo $a;
echo "<br/>";
echo pass($a);
echo "<br/>";
echo $a;
?>