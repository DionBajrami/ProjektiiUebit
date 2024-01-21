<!DOCTYPE html>
<html> 
    <title> LED </title>
    
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
    <body>
        <h1>LED</h1>
        <div class="shopcontainer">
        
            <div class="products">
                <a href="led.php">  <img src="produktet/OP1202.jpg" alt="Multi color LED" class="img"></img></a>
                <div class="info">
                    <a href="led.php">Multi-color x LED Globe String Lights</a>
                    <p class="price">$19.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Multi-color x LED Globe String Light', 19.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="led1.php">  <img src="produktet/SR2052.jpg" alt="SMART WI-FI SECURITY LED FLOOD LIGHT" class="img"></img></a>
                <div class="info">
                    <a href="led1.php">SMART WI-FI SECURITY LED FLOOD LIGHT</a>
                    <p class="price">$139.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('SMART WI-FI SECURITY LED FLOOD LIGHTt', 139.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="led2.php">  <img src="produktet/SR2050.jpg" alt="SMART WI-FI SECURITY LED FLOOD LIGHT WITH MOTION SENSOR" class="img"></img></a>
                <div class="info">
                    <a href="led2.php">SMART WI-FI SECURITY LED FLOOD LIGHT WITH MOTION SENSOR</a>
                    <p class="price">$119.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('SMART WI-FI SECURITY LED FLOOD LIGHT WITH MOTION SENSOR', 119.99)">ADD TO CART</div>
                    </div>
            </div> 

            <div class="products">
                <a href="led3.php">  <img src="produktet/OP1008.jpg" alt="USB RECHARGEABLE CREE XML T6 & COB LED HEAD LAMP TORCH" class="img"></img></a>
                <div class="info">
                    <a href="led3.php">USB RECHARGEABLE CREE XML T6 & COB LED HEAD LAMP TORCH</a>
                    <p class="price">$29.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('USB RECHARGEABLE CREE XML T6 & COB LED HEAD LAMP TORCH', 29.99)">ADD TO CART</div>
                    </div>
            </div> 

            <div class="products">
                <a href="led4.php">  <img src="produktet/OP1005.jpg" alt="Rechargeable 600 Lumens CREE XML LED T6 Head" class="img"></img></a>
                <div class="info">
                    <a href="led4.php">RECHARGEABLE 600 LUMENS CREE XML LED T6 HEAD LAMP TORCH</a>
                    <p class="price">$39.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('RECHARGEABLE 600 LUMENS CREE XML LED T6 HEAD LAMP TORCH', 39.99)">ADD TO CART</div>
                    </div>
            </div> 

            <div class="products">
                <a href="led5.php">  <img src="produktet/OP1502.jpg" alt="20W IP65 Portable Rechargeable LED Work Light" class="img"></img></a>
                <div class="info">
                    <a href="led5.php">20W IP65 Portable Rechargeable LED Work Light</a>
                    <p class="price">$74.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('20W IP65 Portable Rechargeable LED Work Light', 74.99)">ADD TO CART</div>
                    </div>
            </div> 
        
        </div>
        
        <?php 
   include "footer.php";
   ?>
    
    
    
        </div>
        <script src="script.js"></script>

    </body>
    </html>