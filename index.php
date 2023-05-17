<?php 
require('models/product.php');

$newProdact = new Product("ceasar premium","","croccantini di manzo",100,3.00,0);
$newProdact2 = new Product("LOVEDI","","cuccia rettangolare",20,18.00,0);
$newProdact3 = new Product("YES","","treccia verde e blue",20,5.00,0);

$myProducts = [
    $newProdact,
    $newProdact2,
    $newProdact3,

]




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>PHP-OPP-2</title>
  </head>
  <body>
    <h1 class="title">ZOOLANDIA</h1>
    <div class="container">
      <div class="row">
        <?php 
        foreach($myProducts as $product) {?>
            <div class="card">
                <div class="img-container"></div>
                <div class="info-container">
                    <ul>
                        <li><?php echo $product->title ?></li>
                        <li><?php echo $product->description ?></li>
                    </ul>
                </div>
            </div>
        <?php } ?>
      </div>
    </div>
  </body>
</html>
