<?php 
class Category {
    public $name;
    public $poster;

    function __construct($_name, $_poster = "") {
        $this->name = $_name;
        $this->poster = $_poster = "";
    }
}
?>