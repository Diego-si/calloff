<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcalloffe\Page;
use \Hcalloffe\PageAdmin;
use \Hcalloffe\Model\User;
use \Hcalloffe\Model\Rankingm;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
		
	$page = new Page();

	$page->setTpl("index");

});

$app->get('/admin', function() {
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("index");

});

$app->get('/admin/login', function(){

	$page = new PageAdmin(
		 [
			/* "header"=>false, */
			"footer"=>false
		]
);

	$page->setTpl("login");

});

$app->post('/admin/login', function(){

	User::login($_POST["login"], $_POST["password"]);

	header("Location: /admin");
	exit;

});

$app->get('/admin/logout', function() {

	User::logout();

	header("Location: /admin/login");
	exit;

});

$app->get('/quemSomos', function() {
		
	$page = new Page();

	$page->setTpl("quemSomos");

});

$app->get('/organi', function() {
		
	$page = new Page();

	$page->setTpl("organi");

});

$app->get('/duvidas', function() {
		
	$page = new Page();

	$page->setTpl("duvidas");

});

$app->get('/privacidade', function() {
		
	$page = new Page();

	$page->setTpl("privacidade");

});

$app->get('/rankingmj', function() {
		
	$page = new Page();

	$page->setTpl("rankingmj");

});

$app->get('/rankingf', function() {
		
	$page = new Page();

	$page->setTpl("rankingf");

});

$app->get('/rankingbr', function() {
		
	$page = new Page();

	$page->setTpl("rankingbr");

});
///////////////////
$app->get('/admin/rankingmjRegister', function() {
	
	$rankingmjRegister = Rankingm::listAll();
/* 
	User::verifyLogin();
 */
	$page = new PageAdmin();

	$page->setTpl("rankingmjRegister"/* , [
		'rankingmjRegister'=>$rankingmjRegister
	] */);

});

$app->get('/admin/rankingmjRegister/create', function() {

	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("rankingmj-create");

});

$app->post('/admin/rankingmjRegister/create', function() {
	
	$rankingm = new Rankingm();

	/* User::verifyLogin();

	$page = new PageAdmin(); */

	$rankingm->setData($_POST);

	$rankingm->save();

	header('Location: /admin/rankingmjRegister');
	exit;
});

$app->get('/admin/rankingmjRegister/idrankingmj/delete', function($idrankingmj) {
	
	$rankingm = new Rankingm();

	$rankingm->get((int)$idrankingmj);

	$rankingm->delete();

	header('Location: /admin/rankingmjRegister');
	exit;
});
////////////////////
/* $app->get('/admin/rankingfRegister', function() {
	
	$rankingmj = RankingmjR::listAll();

	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("rankingfRegister", [
		'rankingmj' =>$rankingmj
	]);

});

$app->get('/admin/rankingbrRegister', function() {
	
	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("rankingbrRegister");

}); */

$app->run();

 ?>