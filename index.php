<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Projeto\Page;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl('index');

});

$app->run();

 ?>