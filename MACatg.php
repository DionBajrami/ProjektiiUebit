<!DOCTYPE html>
<html> 
    <title> Mobile Accessories </title>
    
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
        <h1>Mobile Accessories</h1>
        <div class="shopcontainer">
            
            <div class="products">
                <a href="ma1.php"> <img src="produktet\MA1.jpg" alt="Camera" class="img"></img></a>
                <div class="info">
                    <a href="ma1.php">GOFOYO K21 Mobile Game Controller</a>
                    <p class="price">$14.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('GOFOYO K21 Mobile Game Controller', 14.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="ma2.php"> <img src="produktet\MA2.jpg" alt="Camera" class="img"></img></a>
                <div class="info">
                    <a href="ma2.php">SUUSON Car Phone Holder Mount</a>
                    <p class="price">$9.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('SUUSON Car Phone Holder Mount', 9.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="ma3.php"> <img src="produktet\MA3.jpg" alt="MA" class="img"></img></a>
                <div class="info">
                    <a href="ma3.php">LISEN Cell Phone Stand</a>
                    <p class="price">$15.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('LISEN Cell Phone Stand', 15.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="ma4.php"> <img src="produktet\MA4.jpg" alt="Camera" class="img"></img></a>
                <div class="info">
                    <a href="ma4.php">Turtle Beach Atom Mobile Game Controller with Bluetooth</a>
                    <p class="price">$74.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Turtle Beach Atom Mobile Game Controller with Bluetooth', 74.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="ma5.php"> <img src="produktet\MA5.jpg" alt="Camera" class="img"></img></a>
                <div class="info">
                    <a href="ma5.php">XINBAOHONG Rechargeable Selfie Light</a>
                    <p class="price">$17.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('XINBAOHONG Rechargeable Selfie Light,', 17.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="ma6.php"> <img src="produktet\MA6.jpg" alt="Camera" class="img"></img></a>
                <div class="info">
                    <a href="ma6.php">LISEN Phone Mount for Car Vent [Never Blocking]</a>
                    <p class="price">$7.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('VETEK Digital Cameras for Photography',7.99)">ADD TO CART</div>
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