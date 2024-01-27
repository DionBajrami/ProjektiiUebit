<!DOCTYPE html>
<html> 
    <title> Electronics Shop </title>
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="icon" type ="image/png" href = "bolt_FILL0_wght400_GRAD0_opsz24.png">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
	
    <?php
   include 'navbar.php';
   include_once 'products.php';
   include_once 'product_functions.php';

   $productIDs = [9,41,30,8,23,14,17,22,19];

    $productFunctions = new product_functions();


   ?>
    <body>
        <h1>New Arrivals</h1>
        <div class="shopcontainer">

        <?php
        $productLinks = [
            9 => "DreamDrone.php",
            41 => "ma6.php",
            30 => "a6.php",
            8 => "c2.php",
            23 => "m3.php",
            14 => "c6.php",
            17 => "cam2.php",
            22 => "m2.php",
            19 => "cam5.php"
           
        ];

        foreach($productIDs as $productId){
            $productDetails = $productFunctions->getProductById($productId);
        
       
        if ($productDetails) {
            $product = new Product(
                $productDetails['name'],
                $productDetails['imagePath'],
                $productDetails['description'],
                $productDetails['price'],
                $productDetails['category']
            );

            $currentProductLink = isset($productLinks[$productId]) ? "{$productLinks[$productId]}?productID={$productId}" : '#';
           
            echo "<div class='products'>";
            echo "<a href='{$currentProductLink}'><img src='{$product->getImagePath()}' alt='{$product->getName()}' class='img'></img></a>";
            echo "<div class='info'>";
            echo "<a href='{$currentProductLink}'>{$product->getName()}</a>";
            echo "<p class='price'>$ {$product->getPrice()}</p>";
            echo "<div class='addcart' onclick=\"addToCart1(this); addToCart('{$product->getName()}', {$product->getPrice()})\">ADD TO CART</div>";
            echo "</div></div>";
        }else {
            echo "<p>No product was found with the given ID</p>";
        }
    }
            ?>


            
        </div>

 
   <?php 
   include "footer.php";
   ?>
</body>
</html>
