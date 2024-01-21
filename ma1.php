<!DOCTYPE html>
<html> 
   
    <head> 
        <title> Mobile Accessories </title> 
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
            <div class="images">
            <img src="produktet\ma1.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\ma1.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">GOFOYO K21 Mobile Game Controller</p>
                <p class="ProductPrice">Price: $14.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('GOFOYO K21 Mobile Game Controller', 14.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">GOFOYO K21 Mobile Game Controller</p>
        <ul>
            <li>3-in-1 game controller: combines gamepads, game triggers, and mobile phone holders into one. </li>
            <li>Comfortable handle, long-term game will not fatigue, alloy trigger, Fire while moving, 4 fingers operate at the same time, faster than the enemy, giving you a better gaming experience</li>
            <li>Easy to use and high precision, increase your game score. In fact this Mobile Controller is a Mechanical version Games plug-in which will never ever be Detected . and you can hold your Phone like a controller with Ergonomic Gaming Design.</li>
        </ul>
             
        </div>
        <script>

        var productImages = [
                "produktet//ma1.jpg",

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