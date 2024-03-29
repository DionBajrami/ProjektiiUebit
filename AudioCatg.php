<?php
include 'navbar.php';
include_once 'products.php';
include_once 'product_functions.php';

$productFunctions = new product_functions();


$categoryToShow = 'Audio';

$productsByCategory = $productFunctions->getProductByCategory($categoryToShow);


$productLinks = [
    8 => 'c2.php',
    26 => 'a2.php',
    27 => 'a3.php',
    28 => 'a4.php',
    29 => 'a5.php',
    30 => 'a6.php'
];

?>

<!DOCTYPE html>
<html>
 <title> Components Category </title>
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

foreach ($productsByCategory as $AudioProducts) {
    if (is_array($AudioProducts)) {
        $productId = (int) $AudioProducts['id'];
        $productLink = isset($productLinks[$productId]) ? "{$productLinks[$productId]}?productID={$productId}" : '#';

        echo "<div class='products'>";
        echo "<a href='{$productLink}'><img src='{$AudioProducts['imagePath']}' alt='{$AudioProducts['name']}' class='img'></img></a>";
        echo "<div class='info'>";
        echo "<a href='{$productLink}'>{$AudioProducts['name']}</a>";
        echo "<p class='price'>$ {$AudioProducts['price']}</p>";
        echo "<div class='addcart' onclick=\"addToCart1(this); addToCart('{$AudioProducts['name']}', {$AudioProducts['price']})\">ADD TO CART</div>";
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
