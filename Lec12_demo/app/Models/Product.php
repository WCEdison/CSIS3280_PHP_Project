<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use HasFactory;
    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        $this->attributes["id"] = $id;
    }

    // Name
    public function getName(){
        return $this->attributes['name'];
    }

    public function setName($name){
        $this->attributes["name"] = $name;
    }

    // Description
    public function getDescription(){
        return $this->attributes['description'];
    }

    public function setDescription($description){
        $this->attributes["description"] = $description;
    }

    // Image
    public function getImage(){
        return $this->attributes['image'];
    }

    public function setImage($image){
        $this->attributes["image"] = $image;
    }

    // Price
    public function getPrice(){
        return $this->attributes['price'];
    }

    public function setPrice($price){
        $this->attributes["price"] = $price;
    }

    // CreatedAt
    public function getCreatedAt(){
        return $this->attributes["created_at"];
    }

    public function setCreatedAt($created_at){
        $this->attributes["created_at"] = $created_at;
    }

    // UpdatedAt
    public function getUpdatedAt(){
        return $this->attributes["updated_at"];
    }

    public function setUpdatedAt($updated_at){
        $this->attributes["updated_at"] = $updated_at;
    }
}
