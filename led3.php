<!DOCTYPE html>
<html> 
    <title> led3 </title> 
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
            <img src="produktet\OP1008.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\OP1008.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
            <img src="produktet\OP1008 (1).jpg" alt="Power Bank" class="p_preview" id="PowerBank2" onclick="NextImage(1)"></img>
        
            <img src="produktet\OP1008 (2).jpg" alt="Power Bank" class="p_preview" id="PowerBank3" onclick="NextImage(2)"></img>

            <img src="produktet\OP1008 (3).jpg" alt="Power Bank" class="p_preview" id="PowerBank3" onclick="NextImage(3)"></img>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">USB RECHARGEABLE CREE XML T6 & COB LED HEAD LAMP TORCH</p>
                <p class="ProductPrice">Price: $29.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('USB RECHARGEABLE CREE XML T6 & COB LED HEAD LAMP TORCH', 29.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">USB RECHARGEABLE CREE XML T6 & COB LED HEAD LAMP TORCH</p>
        <p>Comfortable to wear, this high powered rechargeable Head Torch Lamp is equipped with a CREE XML T6 LED and COB LED. It has 3 different light modes ( High, Low and Flashing) and an adjutable zoom len beam angle to suit various applications. The head strap and LED Bracket is adjustable to provide maximum comfort and illumination.
            This CREE LED Head Torch Lamp is perfect for camping, fishing, working on you car, boat ot truck. Keep it in your fishing tackle, glove box or emergency cabinet. Supplied with rechargeable battery and simply charges via USB.
             </p>
        </div>
        <script>

        var productImages = [
                "produktet//OP1008.jpg",
                "produktet//OP1008 (1).jpg",
                "produktet//OP1008 (2).jpg",
                "produktet//OP1008 (3).jpg"
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