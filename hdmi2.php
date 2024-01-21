<!DOCTYPE html>
<html> 
    <title> HDMI2 </title> 
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="icon" type ="image/png" href = "bolt_FILL0_wght400_GRAD0_opsz24.png">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <script src="script.js"></script>
    <?php
   include 'navbar.php';
   ?>
    <body>
        <div class="pContainer">
            <div class="images" style="width: 600px;">
            <img src="produktet\AA6238.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\AA6238.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
            <img src="produktet\AA6238 (1).jpg" alt="Power Bank" class="p_preview" id="PowerBank2" onclick="NextImage(1)"></img>
        
            <img src="produktet\AA6238 (2).jpg" alt="Power Bank" class="p_preview" id="PowerBank3" onclick="NextImage(2)"></img>

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">2 PORT HDMI TO USB 3.0 VIDEO CAPTURE DEVICE </p>
                <p class="ProductPrice">Price: $129.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('2 Way HDMI 2.0 18GBPS UHD Splitter ', 129.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">2 Port HDMI 2.0 to USB 3.0 Video Capture Device</p>
        <p>This USB 3.0 Video Capture Device has 2 HDMI Inputs. It is a perfect solution for tutorials, gamers, bloggers and live streamers. It allows you to conenct a HDMI video source and a HD camera at the same time and stream the content on an online platform. Supports 1080p high definition inputs and has 1 x HDMI output for a Display and a USB 3.0 output for PC or Laptop connectivity. Compatible with most video capture software such as VLC, OBS, etc.</p>
        </div>
        <script>

        var productImages = [
                "produktet//AA6238.jpg",
                "produktet//AA6238 (1).jpg",
                "produktet//AA6238 (2).jpg"
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