<?php

class Car
{
    //Attributes
    public int $id; //                INTEGER  NOT NULL PRIMARY KEY AUTO_INCREMENT
    public int $year; //              INTEGER  NOT NULL
    public string $make; //             VARCHAR(7) NOT NULL
    public string $model; //             VARCHAR(32) NOT NULL
    public int $price; //         INTEGER  NOT NULL
    public string $drive; //             VARCHAR(3) NOT NULL
    public float $battery; //           NUMERIC(4,1) NOT NULL
    public int $eparange; //          INTEGER NOT NULL
    public float $acceleration60mph; // NUMERIC(4,2) NOT NULL
    public int $topspeed; //           INTEGER NOT NULL
 //Changed to public for the sake of debugging
    //Getters
    function getid()
    {
        return $this->id;
    } //                INTEGER  NOT NULL PRIMARY KEY AUTO_INCREMENT
    function getyear()
    {
        return $this->year;
    } //              INTEGER  NOT NULL
    function getmake()
    {
        return $this->make;
    } //             VARCHAR(7) NOT NULL
    function getmodel()
    {
        return $this->model;
    } //             VARCHAR(32) NOT NULL
    function getprice()
    {
        return $this->price;
    } //         INTEGER  NOT NULL
    function getdrive()
    {
        return $this->drive;
    } //             VARCHAR(3) NOT NULL
    function getbattery()
    {
        return $this->battery;
    } //           NUMERIC(4,1) NOT NULL
    function geteparange()
    {
        return $this->eparange;
    } //          INTEGER NOT NULL
    function getacceleration60mph()
    {
        return $this->acceleration60mph;
    } // NUMERIC(4,2) NOT NULL
    function gettopspeed()
    {
        return $this->topspeed;
    } //           INTEGER NOT NULL
}
?>