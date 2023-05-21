<?php
require_once __DIR__ . "/../Models/category.php";
require_once __DIR__ . "/../Models/product.php";
require_once __DIR__ . "/../Models/drugs.php";
require_once __DIR__ . "/../Models/food.php";
require_once __DIR__ . "/../Models/toys.php";


$cats = new Category("Cat","Cat.jpg");
$dogs = new Category("Dog","dog.jpg");
$drugs_cats = new Drugs("Parax Int","Parassiti intestinali","10",20,0,$cats);
$drugs_dogs = new Drugs("Cane Derma", "Problemi cutanei","10",22,0,$dogs);
$foods_cats = new Food("Felix Le Ghiottonerie","Bustine di umido","15",3.5,0,$cats);
$foods_dogs = new Food("Sensitive","crochette per cani","15",7,0,$dogs);
$toys_cats = new Toys("Topino","Pupazzo topo","20",5,0,$cats);
$toys_dogs = new Toys("Pallina","Palla cane","20",5,0,$dogs);

// var_dump($foods_dogs);

$myProductsCats = 
[
    $drugs_cats,
    $foods_cats,
    $toys_cats,
    
];

$myProductsDogs = 
[
    $drugs_dogs,
    $foods_dogs,
    $toys_dogs,
];

//die(var_dump($drugs_cats));

// var_dump($myProducts);
?>