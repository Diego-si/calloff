<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new Hcalloffe\DB\sql();

	$results = $sql->select("SELECT * FROM users");

	echo json_encode($results);

});

$app->run();

 ?>