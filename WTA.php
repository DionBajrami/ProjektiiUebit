<!DOCTYPE html>
<html> 
    <title> Splash Drone </title> 
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
                  <a href="Electronics Shop.php">
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
            <img src="produktet\PS2179.jpg" style="margin-right: 0px; width: 480px;" id='LargeImage' alt="Power Bank" class="p_main"></img>
    
            <div>

            <img src="produktet\PS2179.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        </div>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">World Travel Adapter</p>
                <p class="ProductPrice">Price: $5.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('World Travel Adapter', 5.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">World Travel Adapter</p>
        <p>This universal or world inbound travel plug adapter allows you to use overseas devices and mains powered devices and be able to plug directly to Australian and New Zealand Mains Power Sockets and Outlets.
            Travel Adaptor or Incoming tourists to Australia & New Zealand
            Compatible with plugs from many countries including:
            Great Britain, Europe(non-earthed), Singapore, Ireland, Middle East, Africa, Asia, Canada, Japan, Philippines, Taiwan, Hong Kong, Bali, Tahiti, USA, South America…
            NOTE:
            This adaptor DOES NOT convert Voltages. Australian Appliances require 240V, if your device is not 240V, you must use an appropriate transformer.</p>
        </div>
        <script>

            var productImages = [
                "produktet//PS2179.jpg",
                
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