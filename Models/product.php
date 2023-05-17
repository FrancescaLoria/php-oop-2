<?php 
class Product {
    public $title;
    public $poster;
    public $description;
    public $quantity;
    public $price;
    public $discount; 

    function __construct($_title,$_poster = "",$_description,$_quantity,$_price,$_discount = 0) {
        $this->title = $_title;
        $this->poster = $_poster;
        $this->description = $_description;
        $this->quantity = $_quantity;
        $this->price = $_price;
        $this->discount = $_discount = 0;

    }
}
?>