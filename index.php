<!DOCTYPE html>
<html> 
    <title> Electronics Shop </title>
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
        <h1>Featured Products</h1>
        <div class="shopcontainer">

 
            <div class="products">
            <a href="hdmi1.php"><img src="produktet\AA6380.png" alt="1 to 2 output HDMI splitter" class="img"></img></a>
                <div class="info">
                 <a href="hdmi1.php">1 to 2 output HDMI Splitter</a>
                 <p class="price">$29.99</p>
                <div class="addcart" onclick="addToCart1(this);
                    addToCart('1 to 2 output HDMI Splitter', 29.99)">ADD TO CART</div>
                    </div>
            </div>

          

            <!-- Produkti 2-->
            <div class="products">
                <a href="GPSDrone.php"><img src="produktet\TR6070a.jpg" alt="GPS Drone with 4K 2 Axis" class="img"></img></a>
                <div class="info">
                    <a href="GPSDrone.php">GPS Drone with 4K 2 Axis </a>
                    <p class="price">$499.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('GPS Drone with 4K 2 Axir', 499.99)">ADD TO CART</div>
                    </div>
            </div>  
           
            <!-- Produkti 3-->
            <div class="products">
                <a href="RCDrone.php"><img src="produktet\TR3128.jpg" alt="RC Micro folidng drone with Wi-Fi FPV HD Cam" class="img"></img></a>
                <div class="info">
                    <a href="RCDrone.php">RC Micro Folidng Drone </a>
                    <p class="price">$69.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('RC Micro Folidng Drone with Wi-Fi FPV HD Cam', 69.99)">ADD TO CART</div>
                    </div>
            </div>  

            <!-- Produkti 4 i finalizuar-->
            <div class="products">
                <a href="Power Bank.php"><img src="produktet\PS1069.jpg" alt="Power Bank" class="img"></img></a>
                <div class="info">
                    <a href="Power Bank.php">Power Bank with 2 x USB and Wireless charger</a>
                    <p class="price">$189.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Power Bank with 2 x USB and Wireless charger', 189.99)">ADD TO CART</div>
                    </div>
            </div>  
            
            <!-- Produkti 5-->
            <div class="products">
                <a href="WTA.php"> <img src="produktet\PS2179.jpg" alt="Adapter" class="img"></img></a>
                <div class="info">
                    <a href="WTA.php">World Travel Adapter</a>
                    <p class="price">$5.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('World Travel Adapter', 5.99)">ADD TO CART</div>
                    </div>
            </div>  

            <!-- Produkti 6-->
            <div class="products">
                <a href="c1.php">  <img src="produktet\PS2015.jpg" alt="USB port charger" class="img"></img></a>
                <div class="info">
                    <a href="c1.php">5V USB Port Mains Charger</a>
                    <p class="price">$9.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('5V USB Port Mains Charger', 9.99)">ADD TO CART</div>
                    </div>
            </div>  

            <!-- Produkti 7-->
            <div class="products">
                <a href="c2.php">  <img src="produktet\AH0074.jpg" alt="SteelSeries black headphones" class="img"></img></a>
                <div class="info">
                    <a href="c2.php">SteelSeries Arctis Nova 1 Multi-System Gaming Headset</a>
                    <p class="price">$49.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('SteelSeries Arctis Nova 1 Multi-System Gaming Headset', 49.99)">ADD TO CART</div>
                    </div>
            </div>  

            <!-- Produkti 8-->
            <div class="products">
                <a href="DreamDrone.php"><img src="produktet\TR3763.jpg" alt="DREAM GPS WIFI 1080P FPV CAMERA DRONE W/ BRUSHLESS MOTOR & 2 AXIS GIMBAL" class="img"></img></a>
                <div class="info">
                    <a href="DreamDrone.php">Dream RC GPS WiFi 1080p FPV Drone</a>
                    <p class="price">$399.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('DREAM GPS WIFI 1080P FPV CAMERA DRONE W/ BRUSHLESS MOTOR & 2 AXIS GIMBAL', 399.99)">ADD TO CART</div>
                    </div>
            </div> 

            <!-- Produkti 9-->
            <div class="products">
                <a href="led.php">  <img src="produktet/OP1202.jpg" alt="Multi color LED" class="img"></img></a>
                <div class="info">
                    <a href="led.php">Multi-color x LED Globe String Lights</a>
                    <p class="price">$19.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Multi-color x LED Globe String Light', 19.99)">ADD TO CART</div>
                    </div>
            </div>  

            
        </div>

 
   <?php 
   include "footer.php";
   ?>
</body>
</html>