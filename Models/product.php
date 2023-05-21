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
        $this->discount = $_discount;
        $this->category = $_category;
    }

    function checkPrice(){
        if(!is_int($this->price)){
            throw new Exception("Prezzo non valido, accettati solo interi");
        }
    }

    function showprice() {
        try {
            $this->checkPrice($this->price);
            return $this->price;
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}
?>