<?php
class UserDAO   {
    private static $db;    // Make things simple for us, just hardcode the class name this time
    static function init(){ //Initialize the internal PDO Agent
        self::$db = new PDOAgent("User");}    
    static function getUser(string $userName){        
        $selectSQL = "SELECT * FROM users WHERE username = :username;";
        self::$db->query($selectSQL);
        self::$db->bind(":username", $userName);
        self::$db->execute();
        return self::$db->singleResult();}
    static function getUsers(){
        $selectSQL = "SELECT * FROM users";
        self::$db->query($selectSQL);
        self::$db->execute();
        return self::$db->getResultSet();}
    static function setPassword($userName, $newPassword){      
        return self::$db->rowCount();}    
}