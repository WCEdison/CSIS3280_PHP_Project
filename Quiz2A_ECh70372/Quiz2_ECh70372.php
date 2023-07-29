<?php
// THIS IS AN INDIVIDUAL TEST
// ZERO MARK FOR PLAGIARISM AND CHEATING
// STUDENT IN VIOLATION OF ACADEMIC INTEGRITY POLICIES WILL FACE  
// DISCIPLINARY ACTION BY THE COLLEGE ADMINISTRATION

// COMPLETE YOUR DETAIL HERE
/*
    File:   Quiz 2 CSIS 3280 001 
    Version: A
    Name:   Edison CHAN
    ID  :   300370372

*/

// WRITE YOUR CODE BELOW
// MAKE SURE TO MAKE A BACKUP COPY OF THIS FILE BEFORE WORKING ON THE AUTHENTICATION REQUIREMENT
require_once("inc/config.inc.php");
require_once("inc/Entity/Car.class.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Entity/Page.class.php");
require_once("inc/Utility/CarDAO.class.php");
require_once("inc/Utility/LoginManager.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/UserDAO.class.php");


CarDAO::init();
UserDAO::init();


$CarArray = CarDAO::getCars();
//BaseDisplay(); //Base Case Display Self
PAGE::displayHeader();
PAGE::displayTable($CarArray);
Page::displayFooter();
PAGE::displayLoginForm();

if (!empty($_POST['username'])) {
    $authUser = UserDAO::getUser($_POST['username']);
    if ($authUser && $authUser->verifyPassword($_POST['password'])) {
        session_start();
        $_SESSION['loggedin'] = $authUser->getUserName();
    }
    if (LoginManager::verifyLogin()) {
        $user = USERDAO::getUser($_SESSION['loggedin']);
        LoggedIn();
    } 
}
else {
    //PAGE::displayLoginForm();
}


function LoggedIn()
{
    if (loginManager::verifyLogin()) {
        Page::displayHeader();
        //PAGE::displayTable();
        //PAGE::displayCarDetail();
        Page::displayLogoutForm();
        Page::displayFooter();
    } else {
        PAGE::displayLoginForm();
    }
}

function Logout()
{
    session_start();
    unset($_SESSION);
    session_destroy();
    PAGE::displayHeader();
    //PAGE::displayTable();
    Page::displayFooter();
}
