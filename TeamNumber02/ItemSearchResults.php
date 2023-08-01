<?php
include_once('inc/config.inc.php');
include_once('inc/Entities/GroceryProduct.class.php');
include_once('inc/Entities/Page.class.php');
include_once('inc/Utility/PDOAgent.class.php');
include_once('inc/Utility/GroceryProductsDAO.class.php');

//init
GroceryProductsDAO::initialize('GroceryProduct');
//get
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $searchTerm = isset($_POST['search_term']) ? $_POST['search_term'] : null;
    if (empty($searchTerm)) {
        $searchTerm = null;
    }

    $category = isset($_POST['category']) ? $_POST['category'] : null;
    if (empty($category)) {
        $category = null;
    }
    $minPrice = isset($_POST['min_price']) ? (float)$_POST['min_price'] : null;
    $maxPrice = isset($_POST['max_price']) ? (float)$_POST['max_price'] : null;

    if (empty($minPrice)) {
        $minPrice = null;
    }
    if (empty($maxPrice)) {
        $maxPrice = null;
    }

    // Get products using search term, category, min_price, and max_price
    $products = GroceryProductsDAO::getAllGroceryProductsBySearch($searchTerm, $category, $minPrice, $maxPrice);
} else {
    // If no POST request, get all products
    $products = GroceryProductsDAO::getAllGroceryProducts();
}

Page::header();
Page::mainPage($products,$searchTerm,$category,$minPrice,$maxPrice);
Page::footer();