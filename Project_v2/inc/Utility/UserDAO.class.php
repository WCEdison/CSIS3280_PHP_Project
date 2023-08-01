<?php

class UserDAO
{
    private static $db;

    public static function initialize(string $className)
    {
        self::$db = new PDOAgent($className);
    }

    public static function getUserByEmail(string $email): ?User
    {
        $query = "SELECT * FROM users WHERE email = :email";

        self::$db->query($query);
        self::$db->bind(":email", $email);
        self::$db->execute();

        return self::$db->singleResult(); // Returns a User object or null
    }

   
}