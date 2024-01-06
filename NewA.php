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
                    <a href="NewA.php"  style="border-bottom: 4px solid rgb(13, 218, 105);">New Arrivals</a>
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
        <h1>New Arrivals</h1>
        <div class="shopcontainer">

 
            <div class="products">
                <a href="led5.php">  <img src="produktet/OP1502.jpg" alt="20W IP65 Portable Rechargeable LED Work Light" class="img"></img></a>
                <div class="info">
                    <a href="led5.php">20W IP65 Portable Rechargeable LED Work Light</a>
                    <p class="price">$74.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('20W IP65 Portable Rechargeable LED Work Light', 74.99)">ADD TO CART</div>
                    </div>
            </div> 

          

            <!-- Produkti 2-->
            <div class="products">
                <a href="c4.php"> <img src="produktet\PB5171.jpg" alt="Adapter" class="img"></img></a>
                <div class="info">
                    <a href="c4.php">C13 IEC 10A MAINS REWIREABLE SOCKET</a>
                    <p class="price">$6.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('C13 IEC 10A MAINS REWIREABLE SOCKET', 6.99)">ADD TO CART</div>
                    </div>
            </div>  
           
            <!-- Produkti 3-->
            <div class="products">
                <a href="ma4.php"> <img src="produktet\MA4.jpg" alt="Camera" class="img"></img></a>
                <div class="info">
                    <a href="ma4.php">Turtle Beach Atom Mobile Game Controller with Bluetooth</a>
                    <p class="price">$74.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Turtle Beach Atom Mobile Game Controller with Bluetooth', 74.99)">ADD TO CART</div>
                    </div>
            </div> 

            <!-- Produkti 4 i finalizuar-->
            <div class="products">
                <a href="hdmi4.php"><img src="produktet\AA6020.jpg" alt="1 to 2 output HDMI splitter" class="img"></img></a>
                    <div class="info">
                     <a href="hdmi4.php">2 WAY HDMI AV SPLITTER</a>
                     <p class="price">$29.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                        addToCart('1 to 2 output HDMI Splitter', 29.99)">ADD TO CART</div>
                        </div>
                </div>
            
            <!-- Produkti 5-->
            <div class="products">
                <a href="SymaDrone.php"><img src="produktet\TR3290.jpg" alt="SYMA X5SW RC WI-FI FPV DRONE SYMA WITH HD CAMERA" class="img"></img></a>
                <div class="info">
                    <a href="SymaDrone.php">SYMA X5SW RC WI-FI FPV DRONE SYMA WITH HD CAMERA</a>
                    <p class="price">$99.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('SYMA X5SW RC WI-FI FPV DRONE SYMA WITH HD CAMERA', 99.99)">ADD TO CART</div>
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
                <a href="led2.php">  <img src="produktet/SR2050.jpg" alt="SMART WI-FI SECURITY LED FLOOD LIGHT WITH MOTION SENSOR" class="img"></img></a>
                <div class="info">
                    <a href="led2.php">SMART WI-FI SECURITY LED FLOOD LIGHT WITH MOTION SENSOR</a>
                    <p class="price">$119.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('SMART WI-FI SECURITY LED FLOOD LIGHT WITH MOTION SENSOR', 119.99)">ADD TO CART</div>
                    </div>
            </div> 

            <!-- Produkti 9-->
            <div class="products">
                <a href="MJXDrone.php"><img src="produktet\TR3810a (4).jpg" alt="MJX BUGS 5W BRUSHLESS GPS WIFI 4K FPV DRONE WITH 2 BATTERIES" class="img"></img></a>
                <div class="info">
                    <a href="MJXDrone.php">MJX BUGS 5W BRUSHLESS GPS WIFI 4K FPV DRONE WITH 2 BATTERIES</a>
                    <p class="price">$499.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('MJX BUGS 5W BRUSHLESS GPS WIFI 4K FPV DRONE WITH 2 BATTERIES', 499.99)">ADD TO CART</div>
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