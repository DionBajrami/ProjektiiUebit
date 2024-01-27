<?php
include 'navbar.php';
include_once 'products.php';
include_once 'product_functions.php';

$productFunctions = new product_functions();


$categoryToShow = 'LED';

$productsByCategory = $productFunctions->getProductByCategory($categoryToShow);


$productLinks = [
    2 => 'led.php',
    42 => 'led1.php',
    43 => 'led2.php',
    44 => 'led3.php',
    45 => 'led4.php',
    46 => 'led5.php'
];

?>

<!DOCTYPE html>
<html>
 <title> LED Category </title>
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

foreach ($productsByCategory as $LEDProducts) {
    if (is_array($LEDProducts)) {
        $productId = (int) $LEDProducts['id'];
        $productLink = isset($productLinks[$productId]) ? "{$productLinks[$productId]}?productID={$productId}" : '#';

        echo "<div class='products'>";
        echo "<a href='{$productLink}'><img src='{$LEDProducts['imagePath']}' alt='{$LEDProducts['name']}' class='img'></img></a>";
        echo "<div class='info'>";
        echo "<a href='{$productLink}'>{$LEDProducts['name']}</a>";
        echo "<p class='price'>$ {$LEDProducts['price']}</p>";
        echo "<div class='addcart' onclick=\"addToCart1(this); addToCart('{$LEDProducts['name']}', {$LEDProducts['price']})\">ADD TO CART</div>";
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
