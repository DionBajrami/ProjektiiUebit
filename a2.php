<!DOCTYPE html>
<html> 
    <title> Audio 2</title> 
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
            <img src="produktet\AH0012.png" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\AH0012.png" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
        

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">STEREO HEADPHONES WITH VOLUME CONTROL </p>
                <p class="ProductPrice">Price: $6.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('STEREO HEADPHONES WITH VOLUME CONTROL', 6.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">STEREO HEADPHONES WITH VOLUME CONTROL</p>
        <p> Immerse yourself in the world of rich, high-fidelity sound with these stylish and comfortable headphones, designed to elevate your listening pleasure to new heights.

            Equipped with precision-tuned drivers, these headphones deliver a crisp and clear stereo sound that brings your music, podcasts, and movies to life. Whether you're a music enthusiast, a gamer, or someone who appreciates top-notch audio quality, our STEREO HEADPHONES are engineered to meet your discerning standards.
            
            One of the standout features of these headphones is the integrated volume control, putting the power to customize your audio experience right at your fingertips. Easily adjust the volume to suit your preferences without reaching for your device, allowing you to stay immersed in your content without any interruptions.
            
            The sleek and ergonomic design of the STEREO HEADPHONES ensures a comfortable fit for extended wear, making them perfect for long listening sessions or on-the-go use. The padded ear cups provide excellent noise isolation, allowing you to enjoy your favorite tunes without any disturbance from the outside world.
            
            Designed with durability in mind, these headphones are built to withstand the rigors of daily use. The adjustable headband ensures a secure fit for different head sizes, and the foldable design makes them convenient to carry in your bag or backpack.
            
            Whether you're commuting, working out, or just relaxing at home, the STEREO HEADPHONES WITH VOLUME CONTROL offer a premium audio experience in a sleek and functional package. Elevate your sound and redefine your listening experience with these exceptional headphones.</p>
        </div>
        <script>

        var productImages = [
                "produktet//AH0012.png"
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