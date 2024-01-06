<!DOCTYPE html>
<html> 
   
    <head> 
        <title> Camera 1 </title> 
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
        <div class="pContainer">
            <div class="images">
            <img src="produktet\Camera.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\Camera.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">G-Anica 4K Digital Cameras for Photography</p>
                <p class="ProductPrice">Price: $148.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('G-Anica 4K Digital Cameras for Photography', 148.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">G-Anica 4K Digital Cameras for Photography</p>
        <ul>
            <li>【Vlogging Camera with 4K 48MP】: Capture the most precious moments of your life with this advanced vlogging camera that features 4K/30fps smooth video resolution and 48MP photographs. With outstanding recording and photographing capabilities, this camera will become your trusty companion in every adventure. Cherish every smile and turn it into a precious memory that you can revisit time and again.</li>
            <li>【16X Digital Zoom & 3.0" IPS LCD Screen】: This portable and compact camera comes equipped with 16X digital zoom that allows you to zoom in on faraway objects with ease. The 3.0-inch IPS LCD screen delivers clear and vivid pictures and videos, enabling you to shoot and view your media with remarkable quality. With a 32GB SD card included, you can use this camera right out of the box without any additional purchases.</li>
            <li>【Multi-Functional Digital Camera】: With the ability to hide or open its built-in flash as needed and adjust ISO settings for low-light environments, this video camera is the ultimate tool for capturing any scene. Packed with features like Selfie mode, continuous shooting, one-button mute, white balance, time stamp, and DISP (bright/off screen display interface), this compact camera truly does it all.</li>
        </ul>
             
        </div>
        <script>

        var productImages = [
                "produktet//Camera.jpg",

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