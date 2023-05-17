<?php 
class Category {
    public $name;
    public $subCategory;

    function __construct($_name, SubCategory $_subCategory) {
        $this->name = $_name;
        $this->subCategory = $_subCategory;
    }
}
?>