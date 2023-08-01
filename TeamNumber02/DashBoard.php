<?php
include_once('inc/config.inc.php');
include_once('inc/Entities/GroceryProduct.class.php');
include_once('inc/Entities/DashBoard.class.php');
include_once('inc/Utility/PDOAgent.class.php');
include_once('inc/Utility/GroceryProductsDAO.class.php');

DashBoard::generateSideNav();
Dashboard::header();
DashBoard::footer();
?>