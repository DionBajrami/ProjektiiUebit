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
    <?php
   include 'navbar.php';
   ?>
    <body>
        <div class="pContainer">
            <div class="images" style="width: 600px;">
            <img src="produktet\AH0094.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>
<div>
            <img src="produktet\AH0094.jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(0)"></img>
            <img src="produktet\AH0094 (1).jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(1)"></img>
        </div>
        

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">Bluetooth 5.1 Foldable Over-Ear Headset</p>
                <p class="ProductPrice">Price: $39.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Bluetooth 5.1 Foldable Over-Ear Headset', 39.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">Bluetooth 5.1 Foldable Over-Ear Headset</p>
        <p>This wireless headset is equipped with Bluetooth 5.1 technology, which enables audio transmission from your smart device or computer within a distance of up to 10M. It supports A2DP, AHSP, and HFP profiles. In addition to Bluetooth, you can also play MP3 files from a microSD card or 3.5mm audio input (using the provided 3.5mm audio cable).
            The headset features 40mm dynamic drivers that deliver high-definition immersive audio. It has a detachable noise-cancelling microphone that is ideal for gaming or making phone calls. The soft, cushioned earpads and an adjustable headband offer excellent comfort. The RGB lights on the earcups add a touch of style to your gaming setup.
            The wireless headset has a built-in lithium battery that supports up to 8 hours of operation in wireless mode and can be recharged from your computer or an optional USB charger (USB cable provided). They are easy to use and foldable for convenient storage in your backpack.</p>
        </div>
        <script>

        var productImages = [
                "produktet//AH0094.jpg",
                "produktet//AH0094 (1).jpg"
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