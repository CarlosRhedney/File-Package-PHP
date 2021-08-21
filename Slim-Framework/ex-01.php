<?php
require_once("vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function(){

	echo "Home Page";

});

$app->get('/hello/:name', function($name){

	echo "Hello, ".$name;

});

$app->run();
?>