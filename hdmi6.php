<!DOCTYPE html>
<html> 
    <title> HDMI6 </title> 
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
            <img src="produktet\AA6011.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\AA6011.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
            <img src="produktet\AA6011 (1).jpg" alt="Power Bank" class="p_preview" id="PowerBank2" onclick="NextImage(1)"></img>
        
            <img src="produktet\AA6011 (2).jpg" alt="Power Bank" class="p_preview" id="PowerBank3" onclick="NextImage(2)"></img>

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">3 INPUT HDMI SWITCH WITH AUDIO EXTRACTOR </p>
                <p class="ProductPrice">Price: $29.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('3 INPUT HDMI SWITCH WITH AUDIO EXTRACTOR', 29.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">3 INPUT HDMI SWITCH WITH AUDIO EXTRACTOR</p>
        <p>A high performance 3 HDMI input selector to 1 HDMI output switch box. This HDMI switch integrates an Audio Extractor via via line level stereo and digital toslink audio for connection to a wireless heaphone, amplified speaker or a receiver. It also has an infra-red extender for control of input devices.
            It also features ARC and EDID selector functon. The system supports all 3D TV formats in addition to all HDTV formats up to 4Kx2K. Furthermore, the remote control gives complete control over the selection of sources and makes the device incredibly user friendly.</p>
        </div>
        <script>

        var productImages = [
                "produktet//AA6011.jpg",
                "produktet//AA6011 (1).jpg",
                "produktet//AA6011 (2).jpg"
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