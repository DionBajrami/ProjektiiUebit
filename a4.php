<!DOCTYPE html>
<html> 
    <title> Audio 4</title> 
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
            <div class="images" style="width: 600px;">
            <img src="produktet\AH0076c.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>
<div>
            <img src="produktet\AH0076c.jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(0)"></img>
            <img src="produktet\Black.jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(1)"></img>
            <img src="produktet\Pink.jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(2)"></img>
            <img src="produktet\Green.jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(3)"></img>
        </div>
        

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">Foldable Over-Ear Bluetooth 5.0 Headphones</p>
                <p class="ProductPrice">Price: $49.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Foldable Over-Ear Bluetooth 5.0 Headphones', 49.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">Foldable Over-Ear Bluetooth 5.0 Headphones</p>
        <p>These wireless headphones are equipped with Bluetooth 5.0 technology and A2DP support to enable audio transmission from your smart device or computer within a distance of up to 10M. In addition to Bluetooth, you can also play audio from 3.5mm audio sources using the provided 3.5mm audio cable.
            The headset features dynamic 40mm drivers that deliver deep bass. It has a built-in microphone that is ideal for hands-free phone calls. The soft, cushioned earpads and an adjustable, padded plastic headband offer exceptional comfort.
            The wireless headset has a built-in 200mAh lithium battery that supports up to 6 hours of playtime in wireless mode and can be recharged from your computer or an optional USB charger (USB cable provided). They are easy to use and foldable for convenient storage in your backpack.</p>
        </div>
        <script>

        var productImages = [
                "produktet//AH0076c.jpg",
                "produktet//Black.jpg",
                "produktet//Pink.jpg",
                "produktet//Green.jpg",

                
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