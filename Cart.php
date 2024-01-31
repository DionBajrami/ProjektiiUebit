<!DOCTYPE html>
<html> 
    <title> Cart </title>
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
   ?>
    <div id="cart" class="carttext">
        Your Shopping Cart Is Empty!
    </div>
    <button class="GoShopping">
        <a href="index.php">
            <img src="home_FILL0_wght400_GRAD0_opsz24.png" class="icon">Click here to start shopping!
        </a>
    </button>
</div>
<?php
include "footer.php";
?>
<script src="script.js"></script>
</body>
</html>