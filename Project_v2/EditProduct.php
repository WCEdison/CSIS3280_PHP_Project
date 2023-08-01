<?php
include_once('inc/config.inc.php');
include_once('inc/Entities/GroceryProduct.class.php');
include_once('inc/Entities/DashBoard.class.php');
include_once('inc/Utility/PDOAgent.class.php');
include_once('inc/Utility/GroceryProductsDAO.class.php');
//init
GroceryProductsDAO::initialize('GroceryProduct');
//get

// Check if the product ID is provided in the URL and the action is "edit"
if (isset($_POST["product_id"])) {
    $product_id = $_POST["product_id"];

    $product = GroceryProductsDAO::getGroceryProduct($product_id);
    // Display the edit product form
    DashBoard::generateSideNav();
    DashBoard::editProductView($product);
} else {
    DashBoard::generateSideNav();
    DashBoard::productListView(GroceryProductsDAO::getAllGroceryProducts());
}

DashBoard::footer();
?>