<!DOCTYPE html>
<html> 
    <title> Components 3</title> 
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
            <img src="produktet\PS3454.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>
<div>
            <img src="produktet\PS3454.jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(0)"></img>
            <img src="produktet\PS3454 (1).jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(1)"></img>
            <img src="produktet\PS3454 (2).jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(2)"></img>
         
        </div>
        

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">POWER SUPPLY POWERPACK WITH 2.1 DC PLUG</p>
                <p class="ProductPrice">Price: $9.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('POWER SUPPLY POWERPACK WITH 2.1 DC PLUG', 9.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">POWER SUPPLY POWERPACK WITH 2.1 DC PLUG</p>
        <p>240V AC to 12VDC regulated 7.5Amp (7500mAh) Desktop Power adaptor / power pack with a 1.5m cable terminated with a 2.1 DC plug  (2.1ID x 5.5OD x 10L) and an EMI suppressor inline. This 12V DC 7.5A power supply is supplied with a 1m IEC Power Lead for connection to a 240V mains socket.</p>
        </div>
        <script>

        var productImages = [
                "produktet//PS3454.jpg",
                "produktet//PS3454 (1).jpg",
                "produktet//PS3454 (2).jpg"
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