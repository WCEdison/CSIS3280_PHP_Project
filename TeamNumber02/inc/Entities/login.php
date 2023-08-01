<?php
session_start();

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Include required files
    include_once "../config.inc.php";
    include_once "../Utility/PDOAgent.class.php";
    include_once "User.class.php";
    include_once "../Utility/UserDAO.class.php";

    // Initialize the UserDAO with the User class
    UserDAO::initialize('User');

    // Attempt to find the user with the given email
    $user = UserDAO::getUserByEmail($email);

    if ($user && $password === $user->getPassword()) {
        $_SESSION["id"] = $user->getId();
        $_SESSION["username"] = $user->getFullName();

        echo "login_success";

        // Redirect to dashboard or another page as needed
        header("Location: ../../dashboard.php");
        exit();
    } else {
        echo "<span style='color:red;'>Invalid email or password.</span>";
        exit();
    }
}

?>
