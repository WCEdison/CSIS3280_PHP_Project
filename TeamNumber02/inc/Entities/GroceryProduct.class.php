<?php

/*
+--------------+------------+------+-----+---------+----------------+
| Field        | Type       | Null | Key | Default | Extra          |
+--------------+------------+------+-----+---------+----------------+
| product_id   | int(11)    | NO   | PRI | NULL    |    Auto        |
| product_name | char(100)  | NO   |     | NULL    |                |
| price        | float(4,2) | NO   |     | NULL    |                |
| quantity     | int(11)    | NO   |     | NULL    |                |
| category     | char(50)   | NO   |     | NULL    |                |
+--------------+------------+------+-----+---------+----------------+
*/


class GroceryProduct{
    private $product_id;
    private $product_name;
    private $price;
    private $quantity;
    private $category;


    //getters
    function getProductID(): int
    {
        return $this->product_id;
    }

    function getProductName(): string
    {
        return $this->product_name;
    }

    function getPrice(): float
    {
        return $this->price;
    }

    function getQuantity(): int
    {
        return $this->quantity;
    }

    function getCategory(): string
    {
        return $this->category;
    }

    //setters

    public function setProductName(string $name)
    {
        $this->product_name = $name;
    }

    function setPrice(float $price)
    {
        $this->price = $price;
    }

    function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    function setCategory(string $category)
    {
        $this->category = $category;
    }


}




?>