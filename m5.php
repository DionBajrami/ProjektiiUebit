<!DOCTYPE html>
<html> 
    
    <head> 
        <title> Components 6</title> 
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
            <img src="produktet\SR2015.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>
<div>
            <img src="produktet\SR2015.jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(0)"></img>
            <img src="produktet\SR2015 (1).jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(1)"></img>
            <img src="produktet\SR2015 (2).jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(2)"></img>
         
        </div>
        

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">WIRELESS 1080P COVERT CAMERA ALARM CLOCK</p>
                <p class="ProductPrice">Price: $99.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('WIRELESS 1080P COVERT CAMERA ALARM CLOCK', 99.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">WIRELESS 1080P COVERT CAMERA ALARM CLOCK</p>
        <p>Looks like an alarm clock, but has an in-built 1080p camera capable of streaming directly to your iOS/Android phone via the Tuya SmartLife app. Functions as a normal alarm clock. In-built microphone and speaker for two way communication. Powered by USB input or via 2 x 18650 lithium cells (S 4739). Ideal for the living room or study. Size: 200 x 179 x 123mm.</p>
        </div>
        <script>

        var productImages = [
                "produktet//SR2015.jpg",
                "produktet//SR2015 (1).jpg",
                "produktet//SR2015 (2).jpg",
                
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