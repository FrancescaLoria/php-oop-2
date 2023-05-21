<?php 
require_once __DIR__ . "/category.php";


class Product {
    public $name;
    public $description;
    public $quantity;
    private $price;
    public $discount; 
    public $category;

    function __construct($_name, $_description, $_quantity,$_price, $_discount = 0, Category $_category)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->quantity = $_quantity;
        $this->price = $_price;
        $this->discount = $_discount = 0;
        $this->category = $_category;
    }

    function showprice() {
        return $this->price;
        
    }
}
?>