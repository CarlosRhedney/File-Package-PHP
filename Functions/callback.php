<?php
function call($callback){
	//code...
	$callback();
}
call(function(){
	echo "Acabou!";
});
?>