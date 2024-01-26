<?php
include 'navbar.php';
include_once 'products.php';
include_once 'product_functions.php';

$productFunctions = new product_functions();


$categoryToShow = 'Drone';

$productsByCategory = $productFunctions->getProductByCategory($categoryToShow);


$productLinks = [
    3 => 'RCDrone.php',
    4 => 'GPSDrone.php',
    9 => 'DreamDrone.php',
    47 => 'SplashDrone.php',
    48 => 'MJXDrone.php',
    49 => 'SymaDrone.php'
];

?>

<!DOCTYPE html>
<html>
 <title> Drones Category </title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="bolt_FILL0_wght400_GRAD0_opsz24.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
    <h1><?php echo $categoryToShow; ?></h1>
    <div class="shopcontainer">

        <?php

foreach ($productsByCategory as $powerProducts) {
    if (is_array($powerProducts)) {
        $productId = (int) $powerProducts['id'];
        $productLink = isset($productLinks[$productId]) ? $productLinks[$productId] : '#';

        echo "<div class='products'>";
        echo "<a href='{$productLink}'><img src='{$powerProducts['imagePath']}' alt='{$powerProducts['name']}' class='img'></img></a>";
        echo "<div class='info'>";
        echo "<a href='{$productLink}'>{$powerProducts['name']}</a>";
        echo "<p class='price'>$ {$powerProducts['price']}</p>";
        echo "<div class='addcart' onclick=\"addToCart1(this); addToCart('{$powerProducts['name']}', {$powerProducts['price']})\">ADD TO CART</div>";
        echo "</div></div>";
    } else {
        echo "<p>No products found in the category: {$categoryToShow}</p>";
    }
}
        ?>

    </div>

    <?php include "footer.php"; ?>

    <script src="script.js"></script>

</body>

</html>
