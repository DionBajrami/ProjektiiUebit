<!DOCTYPE html>
<html> 
    <title> Drones </title>
    
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="icon" type ="image/png" href = "bolt_FILL0_wght400_GRAD0_opsz24.png">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <header>
        <span class="title">TechZone</span>
          <a id="reg" href="reg.php"><img src="person_FILL0_wght400_GRAD0_opsz24.png">Register/Login</img><a>
                <div class="searchbox">
                    <table class="elementbox">
                        <tr>
                            <td>
                <input type="text" placeholder="Search" class="search">
                </td>
                <td>
                <a href=""><i class="searchicon"><img src="search_FILL0_wght400_GRAD0_opsz24.png" alt="search"></i></a>
            </td>
         <tr>
    </table>
    </div>
        <nav>
            <div class="navbar">
                 
                <div class="links">
                  <a href="index.php">
                    <img src="home_FILL0_wght400_GRAD0_opsz24.png" class="icon">Home</img></a>
                    <a href="Contact Us.php">Contact Us</a>
                    <a href="NewA.php">New Arrivals</a>
                    <a href="Cart.php"><img src="shopping_cart_FILL0_wght400_GRAD0_opsz24.png" class="icon">Cart</img></a>
                  </div>



                       <div class="dropdown">
                        <button> ↓ Products</button>
                       <div class="content">
                        <a href="PowerCatg.php">Power</a>
                        <a href="HDMICatg.php">HDMI</a>
                        <a href="DronesCatg.php">Drones</a>
                        <a href="LEDCatg.php">LED light</a>
                        <a href="MACatg.php">Mobile Accessories</a>
                        <a href="AudioCatg.php">Audio</a>
                        <a href="ComponentsCatg.php">Components</a>
                        <a href="VideoCatg.php">Video</a>


                      </div>
                      
                      </div>
                        
               
            </div>
        </nav>
    </header>
    <body>
        <h1>Drones</h1>
        <div class="shopcontainer">
        <div class="products">
            <a href="RCDrone.php"><img src="produktet\TR3128.jpg" alt="RC Micro folidng drone with Wi-Fi FPV HD Cam" class="img"></img></a>
            <div class="info">
                <a href="RCDrone.php">RC Micro Folidng Drone </a>
                <p class="price">$69.99</p>
                <div class="addcart" onclick="addToCart1(this);
                addToCart('RC Micro Folidng Drone with Wi-Fi FPV HD Cam', 69.99)">ADD TO CART</div>
                </div>
        </div> 

        <div class="products">
            <a href="GPSDrone.php"><img src="produktet\TR6070a.jpg" alt="GPS Drone with 4K 2 Axis" class="img"></img></a>
            <div class="info">
                <a href="GPSDrone.php">GPS Drone with 4K 2 Axis </a>
                <p class="price">$499.99</p>
                <div class="addcart" onclick="addToCart1(this);
                addToCart('GPS Drone with 4K 2 Axir', 499.99)">ADD TO CART</div>
                </div>
        </div> 
        
        <div class="products">
            <a href="DreamDrone.php"><img src="produktet\TR3763.jpg" alt="DREAM GPS WIFI 1080P FPV CAMERA DRONE W/ BRUSHLESS MOTOR & 2 AXIS GIMBAL" class="img"></img></a>
            <div class="info">
                <a href="DreamDrone.php">Dream RC GPS WiFi 1080p FPV Drone</a>
                <p class="price">$399.99</p>
                <div class="addcart" onclick="addToCart1(this);
                addToCart('DREAM GPS WIFI 1080P FPV CAMERA DRONE W/ BRUSHLESS MOTOR & 2 AXIS GIMBAL', 399.99)">ADD TO CART</div>
                </div>
        </div> 

        <div class="products">
            <a href="SplashDrone.php"><img src="produktet\TR3989.jpg" alt="SPLASHDRONE 4 WATERPROOF FISHING DRONE - BASE PLATFORM" class="img"></img></a>
            <div class="info">
                <a href="SplashDrone.php">SPLASHDRONE 4 WATERPROOF FISHING DRONE - BASE PLATFORM</a>
                <p class="price">$3399.99</p>
                <div class="addcart" onclick="addToCart1(this);
                addToCart('SPLASHDRONE 4 WATERPROOF FISHING DRONE - BASE PLATFORM', 3399.99)">ADD TO CART</div>
                </div>
        </div> 

        <div class="products">
            <a href="MJXDrone.php"><img src="produktet\TR3810a (4).jpg" alt="MJX BUGS 5W BRUSHLESS GPS WIFI 4K FPV DRONE WITH 2 BATTERIES" class="img"></img></a>
            <div class="info">
                <a href="MJXDrone.php">MJX BUGS 5W BRUSHLESS GPS WIFI 4K FPV DRONE WITH 2 BATTERIES</a>
                <p class="price">$499.99</p>
                <div class="addcart" onclick="addToCart1(this);
                addToCart('MJX BUGS 5W BRUSHLESS GPS WIFI 4K FPV DRONE WITH 2 BATTERIES', 499.99)">ADD TO CART</div>
                </div>
        </div> 

        <div class="products">
            <a href="SymaDrone.php"><img src="produktet\TR3290.jpg" alt="SYMA X5SW RC WI-FI FPV DRONE SYMA WITH HD CAMERA" class="img"></img></a>
            <div class="info">
                <a href="SymaDrone.php">SYMA X5SW RC WI-FI FPV DRONE SYMA WITH HD CAMERA</a>
                <p class="price">$99.99</p>
                <div class="addcart" onclick="addToCart1(this);
                addToCart('SYMA X5SW RC WI-FI FPV DRONE SYMA WITH HD CAMERA', 99.99)">ADD TO CART</div>
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