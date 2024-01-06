<!DOCTYPE html>
<html> 
    <title> RCDrone </title> 
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
            <img src="produktet\TR3128.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\TR3128.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
            <img src="produktet\TR3128(1).jpg" alt="Power Bank" class="p_preview" id="PowerBank2" onclick="NextImage(1)"></img>
        
            <img src="produktet\TR3128(2).jpg" alt="Power Bank" class="p_preview" id="PowerBank3" onclick="NextImage(2)"></img>

            <img src="produktet\TR3128(3).jpg" alt="Power Bank" class="p_preview" id="PowerBank4" onclick="NextImage(3)"></img>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">KY905 RC Micro Folding Drone with Wi-Fi FPV HD Camera</p>
                <p class="ProductPrice">Price: 69.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('KY905 RC Micro Folding Drone with Wi-Fi FPV HD Camera', 69.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">KY905 RC Micro Folding Drone with Wi-Fi FPV HD Camera</p>
        <p>Probably the smallest folding drone in the market with a Wifi FPV HD Camera. Not much larger than than a match box, the HD camera on this tiny drone is adjustable up and down and sends real time video as well as high resolution photos directly to your smartpone. The smartphone clips onto a bracket integrated on the remote control, you are able to view and record the photos and videos directly on to your smartphones screen.
            Despite the small size, the drone is very easy to fly with its host of features such as barometric pressure sensor for altitude hold flight; one button take off and landing and speed switch to mach your flight skill level. Also features 360 degree stunt function, smartphone control and one click return.
            The KY905 Drone measures at a mere 7 x 6.5 x 3 cm in size (folded), it is safely housed inside the remote controller when not in use. Comes with a carry case bag, making it great for travel.
            Suitable for all iOS and Android Phones. 
            Specifcation:
            Product material: ABS
            Product folded size (CM): 7.5*6*3cm
            Product unfolded size (CM): 10*10*3cm
            Storage bag size (CM): 22*17*6.5cm
            Color box size (CM): 24.5*17*6.8cm
            Product color: metallic gray
            Packing method: storage bag
            Remote control battery (included): built-in lithium battery
            Battery parameters: 500 MAH
            Flight time: 10 minutes
            Charging time: about 60-70 minutes
            Remote control distance: about 150 meters
            WIFI image transmission distance: about 100 meter
            Camera: 4K (interpolted)</p>
        </div>
        <script>

        var productImages = [
                "produktet//TR3128.jpg",
                "produktet//TR3128(1).jpg",
                "produktet//TR3128(2).jpg",
                "produktet//TR3128(3).jpg"
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