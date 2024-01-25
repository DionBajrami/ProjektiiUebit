<!DOCTYPE html>
<html> 
    <title> HDMI1 </title>
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
   include 'products.php';

   $hdmi1 = new Product(
    "1 to 2 output HDMI splitter",
    "produktet\AA6380.png",
    "This 2 output HDMI high bandwidth Splitter is an advanced solution for splitting a HDMI signal to two HDMI displays. It provides high performance audio and video output through HDMI cables up to 1080p High Definition video with no data loss. HDCP 1.4 compliant Up to 1080P with 24bit RGB/YCBCR 4:4:4 VESA format up to QSXGA@60Hz Supports LPCM 7.1CH, Dolby TrueHD, and DTS-HD Master Audio Built-in equalizer, retiming and driver Smart EDID, STD(1080p) mode and TV(copy OUT1) mode Compact design for an easy and flexible installation",
    29.99,
    "HDMI"
   );


   ?>
    <body>
        <div class="pContainer">
            <div class="images" style="width: 600px;">
            <img src="produktet\AA6380.png" id='LargeImage' alt="Power Bank" class="p_main"></img>
          
            <img src="produktet\AA6380.png" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
            <img src="produktet\AA6380.jpg" alt="Power Bank" class="p_preview" id="PowerBank2" onclick="NextImage(1)"></img>
        
            <img src="produktet\AA6380 (1).jpg" alt="Power Bank" class="p_preview" id="PowerBank3" onclick="NextImage(2)"></img>

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle"><?php echo $hdmi1->getName()?> </p>
                <p class="ProductPrice">Price: $<?php echo $hdmi1->getPrice()?></p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('<?php echo $hdmi1->getName()?> ', <?php echo $hdmi1->getPrice()?>)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle"><?php echo $hdmi1->getName()?> </p>
        <p><?php echo $hdmi1->getDescription()?></p>
        </div>
        <script>

        var productImages = [
                "produktet//AA6380.png",
                "produktet//AA6380.jpg",
                "produktet//AA6380 (1).jpg"
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