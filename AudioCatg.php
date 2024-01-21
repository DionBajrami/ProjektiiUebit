<!DOCTYPE html>
<html> 
    <title> Audio </title>
    
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
        <h1>Audio</h1>
        <div class="shopcontainer">
        
            <div class="products">
                <a href="c2.php">  <img src="produktet\AH0074.jpg" alt="SteelSeries black headphones" class="img"></img></a>
                <div class="info">
                    <a href="c2.php">SteelSeries Arctis Nova 1 Multi-System Gaming Headset</a>
                    <p class="price">$49.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('SteelSeries Arctis Nova 1 Multi-System Gaming Headset', 49.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="a2.php">  <img src="produktet\AH0012.png" alt="Stereo Headphones with Volume control" class="img"></img></a>
                <div class="info">
                    <a href="a2.php">Stereo Headphones with Volume control</a>
                    <p class="price">$6.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Stereo Headphones with Volume control', 6.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="a3.php">  <img src="produktet\AM2100.jpg" alt="Dynamic Vocal Microphone" class="img"></img></a>
                <div class="info">
                    <a href="a3.php">Dynamic Vocal Microphone</a>
                    <p class="price">$19.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Dynamic Vocal Microphone', 19.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="a4.php">  <img src="produktet\AH0076c.jpg" alt="Foldable Over-Ear Bluetooth 5.0 Headphones" class="img"></img></a>
                <div class="info">
                    <a href="a4.php">Foldable Over-Ear Bluetooth 5.0 Headphones - 4 colors</a>
                    <p class="price">$49.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Foldable Over-Ear Bluetooth 5.0 Headphones - Purple', 49.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="a5.php">  <img src="produktet\AH0094.jpg" alt="Bluetooth 5.1 Foldable Over-Ear Headset" class="img"></img></a>
                <div class="info">
                    <a href="a5.php">Bluetooth 5.1 Foldable Over-Ear Headset</a>
                    <p class="price">$39.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Bluetooth 5.1 Foldable Over-Ear Headset', 39.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="a6.php">  <img src="produktet\AS2002.jpg" alt="Rechargeable Bluetooth PA Speaker with Mic Input" class="img"></img></a>
                <div class="info">
                    <a href="a6.php">Rechargeable Bluetooth PA Speaker with Mic Input</a>
                    <p class="price">$149.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Rechargeable Bluetooth PA Speaker with Mic Input', 149.99)">ADD TO CART</div>
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