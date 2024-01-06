<!DOCTYPE html>
<html> 
    <title> Audio 5</title> 
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
            <img src="produktet\AS2002.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>
<div>
            <img src="produktet\AS2002.jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(0)"></img>
            <img src="produktet\AS2002 (1).jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(1)"></img>
            <img src="produktet\AS2002 (2).jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(2)"></img>
            <img src="produktet\AS2002 (3).jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(3)"></img>
        </div>
        

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">RECHARGEABLE BLUETOOTH PA SPEAKER WITH MIC INPUT</p>
                <p class="ProductPrice">Price: $149.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('RECHARGEABLE BLUETOOTH PA SPEAKER WITH MIC INPUT', 149.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">RECHARGEABLE BLUETOOTH PA SPEAKER WITH MIC INPUT</p>
        <p>This portable 12” speaker has an in-built amplifier and rechargeable battery which is perfect for parties, functions or karaoke nights. Play your music from a Bluetooth® source, USB flash drive, microSD card or auxiliary input. An FM radio receiver is even included and has 3-6 hours playback time from the internal SLA battery. The wireless UHF microphone provides PA functionality, with its own volume and echo controls to mix it into the backing track playing. The USB and microSD card slot can be used for recording while singing your favourite song. Control of inputs and playback is via the on-board control panel or included remote control, while a clear 1.2” LED screen provides information on current playback and settings. A colour changing RGB LED light is located in the speaker box which provides a little visual entertainment too. It features an extendable trolley handle and wheels, so it’s ready to go anywhere. Includes UHF wireless microphone, infrared remote control and mains power adaptor.</p>
        </div>
        <script>

        var productImages = [
                "produktet//AS2002.jpg",
                "produktet//AS2002 (1).jpg",
                "produktet//AS2002 (2).jpg",
                "produktet//AS2002 (3).jpg"
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