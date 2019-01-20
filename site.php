<?php

use \Projeto\Page;
use \Projeto\Model\Category;

$app->get('/', function() {

	$page = new Page();

	$page->setTpl('index');

});

$app->get("/category/:idcategory", function($idcategory){

	$category = new Category();

	$category->get((int)$idcategory);

	$page = new Page();

	$page->setTpl("category", [
		'category' => $category->getValues(),
		'products' => []
	]);

});

?>