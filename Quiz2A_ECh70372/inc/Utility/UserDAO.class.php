<?php

// nothing to be done here

class UserDAO   {

    private static $db;

    static function init()  {
        //Initialize the internal PDO Agent
        self::$db = new PDOService("User");    
    }    

    static function getUser(string $userName)  {
        
        $selectSQL = "SELECT * FROM users WHERE username = :username;";
        
        self::$db->query($selectSQL);
        self::$db->bind(":username", $userName);
        self::$db->execute();
        return self::$db->singleResult();

    }

    static function getUsers()  {

        $selectSQL = "SELECT * FROM users";
        self::$db->query($selectSQL);
        self::$db->execute();
        return self::$db->getResultSet();    

    }
    

    static function setPassword($userName, $newPassword)    {

        $updateSQL = "UPDATE users SET Password = :password
                        WHERE username = :username;";

        self::$db->query($updateSQL);
        self::$db->bind(":username", $userName);
        self::$db->bind(":password", password_hash($newPassword,PASSWORD_DEFAULT));
        self::$db->execute();

    return self::$db->rowCount();

    }
}