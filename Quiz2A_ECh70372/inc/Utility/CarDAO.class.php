<?php

// nothing to be done here

class CarDAO   {

    private static $db;

    static function init()  {
        //Initialize the internal PDO Service
        self::$db = new PDOService("Car");    
    }
    
    static function getCar(INT $cid)  {

        $selectSQL = "SELECT * FROM car WHERE id=:id";        
        self::$db->query($selectSQL);
        self::$db->bind(':id', $cid);
        self::$db->execute();
        return self::$db->singleResult();    

    }

    static function getCars(string $sortby=null, string $sort=null)  {

        $selectSQL = "SELECT * FROM car";
        if($sortby){
            $selectSQL .= " ORDER BY ".$sortby;
            if($sort)
                $selectSQL .= " ".$sort;
        }
        self::$db->query($selectSQL);
        self::$db->execute();
        return self::$db->getResultSet();    

    }
    
    
}