<!DOCTYPE html>
<html> 
    <title> Syma Drone </title> <!--Produkti i finalizuar-->
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
        <style>

           
        </style>
        <div class="pContainer">

                <div class="imgbox1" >
            <img src="produktet\TR3290.jpg" style="margin-right: 0px;" id='LargeImage' alt="Power Bank" class="p_main"></img>
    
            

            <img src="produktet\TR3290.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
            <img src="produktet\TR3290 (1).jpg" alt="Power Bank" class="p_preview" id="PowerBank2" onclick="NextImage(1)"></img>
        
            <img src="produktet\TR3290 (2).jpg" alt="Power Bank" class="p_preview" id="PowerBank3" onclick="NextImage(2)"></img>

            <img src="produktet\TR3290 (3).jpg" alt="Power Bank" class="p_preview" id="PowerBank4" onclick="NextImage(3)"></img>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">Syma X5SW RC Wi-Fi FPV Drone Syma with HD Camera</p>
                <p class="ProductPrice">Price:$99.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Syma X5SW RC Wi-Fi FPV Drone Syma with HD Camera', 99.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">Syma X5SW RC Wi-Fi FPV Drone Syma with HD Camera</p>
        <p>TThe Syma X5SW quadcopter drone is known for its super stable fligth performance and ease of control. It features a 2MP high definition camera that transmits real time video directly to your smartphone.</p>
        <ul>
            <h3>Features</h3>
            <li>HD Camera Recorder</li>
            <li> Takes Photos and Videos</li>
         <li> Saves Directly on to your smartphone</li>
            <li>Headless Mode</li>
                <li>360 dergree mid air flips</li>
                    <li>Blade Protectors</li>
                        <li> 2 Speeds (High and Low)</li>
                        </ul>
                        <br>
            <h3>Specifications:</h3>
            <ul>
            <li>Brand Name: Syma</li>
            <li>Model Number: X5SW</li>
            <li>Aerial Photography: Yes</li>
            <li>Material: Metal, Plastic</li>
            <li>Remote Distance: About 50m</li>
            <li>Dimensions: 31.5 x 31.5 x 10.5cm</li>
            <li>Charging Voltage: 3.7V 500mAh</li>
            <li>Charging Time: About 130mins</li>
            <li>Controller Battery: 4*AA(Not Included)</li>
            <li>Control Channels: 4 Channels</li>
            <li>Action Time: About 8mins</li>
            <li>Age Range: > 14 years old</li>
            <li>Camera: FPV Wifi (Can connect with smartphones)</li>
        </ul>
    </div>
        <script>

            var productImages = [
                "produktet//TR3290.jpg",
                "produktet//TR3290 (1).jpg",
                "produktet//TR3290 (2).jpg",
                "produktet//TR3290 (3).jpg"
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