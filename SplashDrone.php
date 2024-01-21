<!DOCTYPE html>
<html> 
    <title> Splash Drone </title> 
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
        <style>

           
        </style>
        <div class="pContainer">

                <div class="imgbox1" >
            <img src="produktet\TR3989.jpg" style="margin-right: 0px; width: 480px;" id='LargeImage' alt="Power Bank" class="p_main"></img>
    
            

            <div>
            <img src="produktet\TR3989.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
            <img src="produktet\TR3989 (1).jpg" alt="Power Bank" class="p_preview" id="PowerBank2" onclick="NextImage(1)"></img>
        
            <img src="produktet\TR3989 (2).jpg" alt="Power Bank" class="p_preview" id="PowerBank3" onclick="NextImage(2)"></img>
            </div>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">SPLASHDRONE 4 WATERPROOF FISHING DRONE - BASE PLATFORM</p>
                <p class="ProductPrice">Price: $3399.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('SPLASHDRONE 4 WATERPROOF FISHING DRONE - BASE PLATFORM', 3399.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">SPLASHDRONE 4 WATERPROOF FISHING DRONE - BASE PLATFORM</p>
        <p>SplashDrone 4 is the 5th generation waterproof drone representing SwellPro's 7 years of knowledge and understanding of drone waterproofing technology. SplashDrone 4 is the all-new waterproof flight & float platform designed for multipurpose operation in any harsh environment.</p>
        </div>
        <script>

            var productImages = [
                "produktet//TR3989.jpg",
                "produktet//TR3989 (1).jpg",
                "produktet//TR3989 (2).jpg"
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