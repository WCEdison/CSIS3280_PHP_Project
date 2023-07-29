<?php

require_once("inc/config.inc.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Entity/Page.class.php");

require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/UserDAO.class.php");

UserDAO::init();

if(!empty($_POST['username'])){
    // login form submission

    $authUser = UserDAO::getUser($_POST['username']);

    if($authUser && $authUser->verifyPassword($_POST['password'])){
        // start the session
        session_start();

        // set the session that the user is logged in
        $_SESSION['loggedin'] = $authUser->getUserName();
    }

}

if(LoginManager::verifyLogin()){
    $user = UserDAO::getUser($_SESSION['loggedin']);

    // the user is logged in, redirect the user to the user profile
    header("Location: userProfile.php");

    // after the call to header, make sure to exit
    exit;
}
else{
    Page::header();
    Page::showLogin();
    Page::footer();
}



?>