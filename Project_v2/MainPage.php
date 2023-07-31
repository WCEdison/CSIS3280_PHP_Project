<?php
include_once('inc/config.inc.php');
include_once('inc/Entities/GroceryProduct.class.php');
include_once('inc/Entities/Page.class.php');
include_once('inc/Utility/PDOAgent.class.php');
include_once('inc/Utility/GroceryProductsDAO.class.php');

//init
GroceryProductsDAO::initialize('GroceryProduct');
//get
$products = GroceryProductsDAO::getAllGroceryProducts();


Page::header();
Page::mainPage($products);
Page::footer();

?>