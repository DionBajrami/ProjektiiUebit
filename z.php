<?php
include_once 'product_functions.php';
include_once 'products.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<header>
  <?php
  include "navbar.php"?>
</header>
<body>
  
</body>
</html>
<?php
$productFunctions = new product_functions();


$allProducts = $productFunctions->getAllProducts();



foreach ($allProducts as $productData) {
    // Create a Product object for each row of data
    $product = new Product(
        $productData['name'],
        $productData['imagePath'],
        $productData['description'],
        $productData['price']
    );
?>
   <div class ="shopcontainer">
    <?php
    echo "<div class='products'>";
    echo "<a href='hdmi1.php'><img src='{$product->getImagePath()}' alt='{$product->getName()}' class='img'></img></a>";
    echo "<div class='info'>";
    echo "<a href='hdmi1.php'>{$product->getName()}</a>";
    echo "<p class='price'>$ {$product->getPrice()}</p>";
    echo "</div></div>";
}

?>
</div>