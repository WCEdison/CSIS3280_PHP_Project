<?php

require_once('simplePDOFunction.php');

function login_manager(){
    header('WWW-Authenticate: Basic Realm = "Secret Room"');
    header("HTTP/1.0 401 Unauthorized");
    exit;
}

// the authentication

if(!isset($_SERVER['PHP_AUTH_USER'])){
    login_manager();
}
else{
    
    $pdo = simplePDO();
    $query = "SELECT * FROM users WHERE username=:user";

    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":user",$_SERVER['PHP_AUTH_USER'], PDO::PARAM_STR);
    $stmt->execute();
    $rows = $stmt->fetch();

    if(($stmt->rowCount() == 0) || (!password_verify($_SERVER['PHP_AUTH_PW'],$rows['password']))){
        login_manager();
    }
    else{
        echo "<p>Welcome to my secret place</p>";
    }
}


?>