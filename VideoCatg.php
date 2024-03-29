<?php
include 'navbar.php';
include_once 'products.php';
include_once 'product_functions.php';

$productFunctions = new product_functions();


$categoryToShow = 'Video';

$productsByCategory = $productFunctions->getProductByCategory($categoryToShow);


$productLinks = [
    15 => 'cam.php',
    16 => 'cam1.php',
    17 => 'cam2.php',
    18 => 'cam3.php',
    19 => 'cam5.php',
    20 => 'cam4.php'
];

?>

<!DOCTYPE html>
<html>
 <title> Video Category </title>
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

foreach ($productsByCategory as $VideoProducts) {
    if (is_array($VideoProducts)) {
        $productId = (int) $VideoProducts['id'];
        $productLink = isset($productLinks[$productId]) ? "{$productLinks[$productId]}?productID={$productId}" : '#';

        echo "<div class='products'>";
        echo "<a href='{$productLink}'><img src='{$VideoProducts['imagePath']}' alt='{$VideoProducts['name']}' class='img'></img></a>";
        echo "<div class='info'>";
        echo "<a href='{$productLink}'>{$VideoProducts['name']}</a>";
        echo "<p class='price'>$ {$VideoProducts['price']}</p>";
        echo "<div class='addcart' onclick=\"addToCart1(this); addToCart('{$VideoProducts['name']}', {$VideoProducts['price']})\">ADD TO CART</div>";
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
