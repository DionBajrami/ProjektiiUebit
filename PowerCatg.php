<!DOCTYPE html>
<html> 
    <title> Power </title>
    
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
        <h1>Power</h1>
        <div class="shopcontainer">
            <div class="products">
                <a href="WTA.php"> <img src="produktet\PS2179.jpg" alt="Adapter" class="img"></img></a>
                <div class="info">
                    <a href="WTA.php">World Travel Adapter</a>
                    <p class="price">$5.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('World Travel Adapter', 5.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="c1.php">  <img src="produktet\PS2015.jpg" alt="USB port charger" class="img"></img></a>
                <div class="info">
                    <a href="c1.php">5V USB Port Mains Charger</a>
                    <p class="price">$9.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('5V USB Port Mains Charger', 9.99)">ADD TO CART</div>
                    </div>
            </div>   

            <div class="products">
                <a href="c3.php"> <img src="produktet\PS3010.jpg" alt="Adapter" class="img"></img></a>
                <div class="info">
                    <a href="c3.php">5V 2.1A USB PORT WALL CHARGER BLACK</a>
                    <p class="price">$9.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('5V 2.1A USB PORT WALL CHARGER BLACK', 9.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="c4.php"> <img src="produktet\PB5171.jpg" alt="Adapter" class="img"></img></a>
                <div class="info">
                    <a href="c4.php">C13 IEC 10A MAINS REWIREABLE SOCKET</a>
                    <p class="price">$6.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('C13 IEC 10A MAINS REWIREABLE SOCKET', 6.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="c5.php"> <img src="produktet\PB5170.jpg" alt="Adapter" class="img"></img></a>
                <div class="info">
                    <a href="c5.php">C14 IEC 10A MAINS REWIREABLE PLUG</a>
                    <p class="price">$6.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('C14 IEC 10A MAINS REWIREABLE PLUG', 6.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="c6.php"> <img src="produktet\PS2030.jpg" alt="Adapter" class="img"></img></a>
                <div class="info">
                    <a href="c6.php">12V DC 1A POWER ADAPTER WITH 2.1 DC PLUG</a>
                    <p class="price">$15.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('12V DC 1A POWER ADAPTER WITH 2.1 DC PLUG', 15.99)">ADD TO CART</div>
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