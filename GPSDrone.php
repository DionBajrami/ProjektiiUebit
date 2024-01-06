<!DOCTYPE html>
<html> 
    <title> GPSDrone </title> 
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="icon" type ="image/png" href = "bolt_FILL0_wght400_GRAD0_opsz24.png">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <script src="script.js"></script>
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
        <div class="pContainer">
            <div class="images">
            <img src="produktet\TR6070a.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\TR6070a.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
            <img src="produktet\TR6070a (1).jpg" alt="Power Bank" class="p_preview" id="PowerBank2" onclick="NextImage(1)"></img>
        
            <img src="produktet\TR6070a (2).jpg" alt="Power Bank" class="p_preview" id="PowerBank3" onclick="NextImage(2)"></img>

            <img src="produktet\TR6070a (3).jpg" alt="Power Bank" class="p_preview" id="PowerBank4" onclick="NextImage(3)"></img>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">Q868 FOLDING BRUSHLESS GPS DRONE WITH 4K 2 AXIS GIMBAL HD FPV CAMERA - 2 BATTERIES</p>
                <p class="ProductPrice">Price: 499.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Power Bank with 2 x USB and Wireless charger', 499.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">Q868 FOLDING BRUSHLESS GPS DRONE WITH 4K 2 AXIS GIMBAL HD FPV CAMERA - 2 BATTERIES</p>
        <p>The XK Q868 is a folding camera drone equipped with a 4K full HD FPV Camera on a 2 axis gimbal for stable video recording. The camera is tilt adjustable from the remote making it a great for photography and videography drone. Integrates GPS functionality for stable drone positioning, return to home function and video flight modes.
            The Q868 Camera Drone is capable of transmitting video back to your smartphone via the APP up to 500m in distance. The modular high capaicty rechargeable battery pack is able to provide up to 30 mins flight time. Features follow me, orbit mode, waypoint flight modes. It integrates handy safety features such as Lose control and low battery return functions to ensure your drone is always safe.</p>
        </div>
        <script>

        var productImages = [
                "produktet//TR6070a.jpg",
                "produktet//TR6070a (1).jpg",
                "produktet//TR6070a (2).jpg",
                "produktet//TR6070a (3).jpg"
            ];

            let pozita = 0;
            let sliderImageElement = document.getElementById("LargeImage");

           

            function updateImage(index) {
                sliderImageElement.src = productImages[index];
                pozita = index;
            }

            function NextImage(index) {
                updateImage(index);
            }
        
            </script>
    </body>
</html>