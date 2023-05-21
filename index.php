<?php 
require_once __DIR__ . "/db/database.php";
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
          foreach ( $myProductsCats as $product ) {  ?>
          <div class="card">
            <div class="card-title"><?php echo $product->category->name; ?></div>
            <div class="img-container">
              <img src="<?php echo 'img/' . $product->category->poster; ?>" alt="">
            </div>
            <div class="title-category"><?php echo $product->name; ?></div>
            <p class="description"><?php echo $product->description; ?></p>
            <div class="quantity">QUANTITY: <?php echo $product->quantity; ?></div>
            <div class="price">PRICE: <?php echo $product->showprice(); ?> €</div>
            <div class="discount">DISCOUNT: <?php echo $product->discount; ?></div>

          
          
          </div>
      <?php } ?>
      </div>
      <div class="row">
      <?php 
          foreach ( $myProductsDogs as $product ) {  ?>
          <div class="card">
            <div class="card-title"><?php echo $product->category->name; ?></div>
            <div class="img-container">
              <img src="<?php echo 'img/' . $product->category->poster; ?>" alt="">
            </div>
            <div class="title-category"><?php echo $product->name; ?></div>
            <p class="description"><?php echo $product->description; ?></p>
            <div class="quantity">QUANTITY: <?php echo $product->quantity; ?></div>
            <div class="price">PRICE: <?php echo $product->showprice(); ?> €</div>
            <div class="discount">DISCOUNT: <?php echo $product->discount; ?></div>

          
          
          </div>
      <?php } ?>
      </div>
    </div>
  </body>
</html>
