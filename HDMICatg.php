<?php
include 'navbar.php';
include_once 'products.php';
include_once 'product_functions.php';

$productFunctions = new product_functions();


$categoryToShow = 'HDMI';

$productsByCategory = $productFunctions->getProductByCategory($categoryToShow);


$productLinks = [
    1 => 'hdmi1.php',
    31 => 'hdmi2.php',
    32 => 'hdmi3.php',
    33 => 'hdmi4.php',
    34 => 'hdmi5.php',
    35 => 'hdmi6.php'
];

?>

<!DOCTYPE html>
<html>
 <title> HDMI Category </title>
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

foreach ($productsByCategory as $HDMIProducts) {
    if (is_array($HDMIProducts)) {
        $productId = (int) $HDMIProducts['id'];
        $productLink = isset($productLinks[$productId]) ? "{$productLinks[$productId]}?productID={$productId}" : '#';

        echo "<div class='products'>";
        echo "<a href='{$productLink}'><img src='{$HDMIProducts['imagePath']}' alt='{$HDMIProducts['name']}' class='img'></img></a>";
        echo "<div class='info'>";
        echo "<a href='{$productLink}'>{$HDMIProducts['name']}</a>";
        echo "<p class='price'>$ {$HDMIProducts['price']}</p>";
        echo "<div class='addcart' onclick=\"addToCart1(this); addToCart('{$HDMIProducts['name']}', {$HDMIProducts['price']})\">ADD TO CART</div>";
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
