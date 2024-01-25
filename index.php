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

   $productIDs = [1,2,3,4,5,6,7,8,9];

    $productFunctions = new product_functions();


   ?>
    <body>
        <h1>Featured Products</h1>
        <div class="shopcontainer">

 

        <?php
        $productLinks = [
            1 => "hdmi1.php",
            2 => "led.php",
            3 => "GPSDrone.php",
            4 => "RCDrone.php",
            5 => "Power Bank.php",
            6 => "WTA.php",
            7 => "c1.php",
            8 => "c2.php",
            9 => "DreamDrone.php"
           
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

                $currentProductLink = isset($productLinks[$productId]) ? $productLinks[$productId] : '#';

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
