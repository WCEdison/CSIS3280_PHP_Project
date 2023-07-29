<?php
require_once("inc/config.inc.php");
require_once("inc/Entity/Page.class.php");
require_once("inc/Entity/User.class.php");

require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/UserDAO.class.php");

// start session
session_start();

// unset the data
unset($_SESSION);

// destroy the session
session_destroy();

Page::header();
echo "<p>Thank you for your visit</p>";
Page::footer();

?>