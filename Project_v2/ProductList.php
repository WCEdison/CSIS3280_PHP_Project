<?php
include_once('inc/config.inc.php');
include_once('inc/Entities/GroceryProduct.class.php');
include_once('inc/Entities/DashBoard.class.php');
include_once('inc/Utility/PDOAgent.class.php');
include_once('inc/Utility/GroceryProductsDAO.class.php');

//init
GroceryProductsDAO::initialize('GroceryProduct');
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "edit") {
    if (isset($_POST["product_id"])) {
        $originalProduct = GroceryProductsDAO::getGroceryProduct($_POST["product_id"]);
        if (!$originalProduct) {
            header("Location: ProductList.php");
            exit();
        }

        // Update the original product with the information from the form
        $originalProduct->setProductName($_POST["product_name"]);
        $originalProduct->setPrice($_POST["price"]);
        $originalProduct->setQuantity($_POST["quantity"]);
        $originalProduct->setCategory($_POST["category"]);

        // Update the product using the DAO's editGroceryProduct function
        $rowCount = GroceryProductsDAO::editGroceryProduct($originalProduct);

        
        if ($rowCount > 0) {
            header("Location: ProductList.php");
            exit();
        } else {
            echo "Error updating the product.";
        }
    }
}
if (isset($_POST["action"]) && $_POST["action"] === "delete" && isset($_POST["product_id"])) {
    $product_id = $_POST["product_id"];
    // Perform the delete operation
    $deleted = GroceryProductsDAO::deleteGroceryProduct($product_id);

    // Check if the item was deleted successfully
    if ($deleted) {
        // Redirect back to the product list view after deleting
        header("Location: ProductList.php");
        exit();
    } else {
        // Handle the case where deletion failed (display an error message, etc.)
        echo "Failed to delete the product.";
        // Optionally, you can redirect back to the product list view or handle the error differently.
    }
}
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "add") {
    // Get the form data
    $productName = $_POST["product_name"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $category = $_POST["category"];

    // Create a new GroceryProduct object
    $newProduct = new GroceryProduct();
    $newProduct->setProductName($productName);
    $newProduct->setPrice($price);
    $newProduct->setQuantity($quantity);
    $newProduct->setCategory($category);

    // Add the new product to the database using the DAO
    $result = GroceryProductsDAO::createGroceryProduct($newProduct);

    // Check if the product was added successfully
    if ($result) {
        // Redirect to the product list view
        header("Location: ProductList.php");
        exit();
    } else {
        // Handle the error if the product was not added
        echo "Failed to add the product.";
    }
}


//get
$products = GroceryProductsDAO::getAllGroceryProducts();

DashBoard::generateSideNav();
DashBoard::productListView($products);
DashBoard::footer();

?>