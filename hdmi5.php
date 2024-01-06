<!DOCTYPE html>
<html> 
    <title> HDMI5 </title> 
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
            <img src="produktet\AA6156.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\AA6156.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">2 Way HDMI 2.0 18GBPS UHD Splitter </p>
                <p class="ProductPrice">Price: $99.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('2 Way HDMI 2.0 18GBPS UHD Splitter ', 99.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">2 WAY HDMI 2.0 18GBPS SPLITTER</p>
        <p>Connecting a 4K HDMI Source such as a Foxtel IQ4, PS4 Pro or XBOX One S to multiple LCD Displays with varying resolutions can be rather frustrating. The 4K HDMI source detects the lowest resolution and displays this HDMI signals across all LCD Displays connected. With this 2 Way HDMI 2.0 Splitter, you are able to output a 4K and 1080P resolutions across 2 Displays connected to the HDMI Splitter. It has a manual EDID setting that allows manual control over which EDID setting to follow. It also have a Video resolution switch to manually select each output to dispay 4K or 1080p. Also supports HDR and has HDCP Stripper / Converter to allows connectivity to older LCD's and TV's with earlier HDCP versions.
            It integrates a HDMI Audio Extractor which allows interfacing of older amplifiers, receivers or even wireless headphones via the digital fibre optic toslink output or line level Audio output via the 3.5mm Stereo socket.</p>
        </div>
        <script>

        var productImages = [
                "produktet//AA6020.jpg",
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