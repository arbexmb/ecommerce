<?php

use \Projeto\Page;
use \Projeto\Model\Category;
use \Projeto\Model\Product;

$app->get('/', function() {

	$products = Product::listAll();

	$page = new Page();

	$page->setTpl('index', [
		'products' => Product::checkList($products)
	]);

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