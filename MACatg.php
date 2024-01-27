<?php
include 'navbar.php';
include_once 'products.php';
include_once 'product_functions.php';

$productFunctions = new product_functions();


$categoryToShow = 'MA';

$productsByCategory = $productFunctions->getProductByCategory($categoryToShow);


$productLinks = [
    36 => 'ma1.php',
    37 => 'ma2.php',
    38 => 'ma3.php',
    39 => 'ma4.php',
    40 => 'ma5.php',
    41 => 'ma6.php'
];

?>

<!DOCTYPE html>
<html>
 <title> Mobile Accessories Category </title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="bolt_FILL0_wght400_GRAD0_opsz24.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Mobile Accessories</h1>
    <div class="shopcontainer">

        <?php

foreach ($productsByCategory as $MAProducts) {
    if (is_array($MAProducts)) {
        $productId = (int) $MAProducts['id'];
        $productLink = isset($productLinks[$productId]) ? "{$productLinks[$productId]}?productID={$productId}" : '#';

        echo "<div class='products'>";
        echo "<a href='{$productLink}'><img src='{$MAProducts['imagePath']}' alt='{$MAProducts['name']}' class='img'></img></a>";
        echo "<div class='info'>";
        echo "<a href='{$productLink}'>{$MAProducts['name']}</a>";
        echo "<p class='price'>$ {$MAProducts['price']}</p>";
        echo "<div class='addcart' onclick=\"addToCart1(this); addToCart('{$MAProducts['name']}', {$MAProducts['price']})\">ADD TO CART</div>";
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
