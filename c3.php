<!DOCTYPE html>
<html> 
    <title> 5V 2.1A USB PORT WALL CHARGER BLACK </title> 
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
            <img src="produktet\PS3010.jpg" style="margin-right: 0px;height: 500px;" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <div>
            <img src="produktet\PS3010.jpg" style="width:110px;height:110px"alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
            <img src="produktet\PS3010 (1).jpg" style="width:110px;height:110px"alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(1)"></img>
            <img src="produktet\PS3010 (2).jpg" style="width:110px;height:110px"alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(2)"></img>
            <img src="produktet\PS3010 (3).jpg" style="width:110px;height:110px"alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(3)"></img>

            
            </div>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">5V 2.1A USB PORT WALL CHARGER BLACK</p>
                <p class="ProductPrice">Price: $9.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('5V 2.1A USB PORT WALL CHARGER BLACK', 9.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">5V 2.1A USB PORT WALL CHARGER BLACK</p>
        <p>A 240VAC Mains charger with a total output of 2.1 Amps. Charge your electronic devices such as smartphones and tablets simultaneously with this USB Wall Charger. Black colour. Meets Australian SAA Safety standards.</p>
        </div>
        <script>

            var productImages = [
                "produktet//PS3010.jpg",
                "produktet//PS3010 (1).jpg",
                "produktet//PS3010 (2).jpg",
                "produktet//PS3010 (3).jpg",
                
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