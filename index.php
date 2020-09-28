<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcalloffe\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
		
	$page = new Page();

	$page->setTpl("index");
	/* $sql = new Hcalloffe\DB\sql();

	$results = $sql->select("SELECT * FROM users");

	echo json_encode($results); */

});

$app->run();

 ?>