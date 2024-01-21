<!DOCTYPE html>
<html> 
    
    <head> 
        <title> Components 5</title> 
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
            <img src="produktet\PS1065.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>
<div>
            <img src="produktet\PS1065.jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(0)"></img>
            <img src="produktet\PS1065 (1).jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(1)"></img>
            <img src="produktet\PS1065 (2).jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(2)"></img>
         
        </div>
        

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">10,000MAH USB-C PD POWER DELIVERY POWER BANK</p>
                <p class="ProductPrice">Price: $49.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('10,000MAH USB-C PD POWER DELIVERY POWER BANK', 49.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">10,000MAH USB-C PD POWER DELIVERY POWER BANK</p>
        <p>Offering both the latest QuickCharge 3.0 charging and USB-C PD output, this enormous 10,000mAh power bank will keep your devices charged away from mains power. Dual USB type A outputs for QC3.0 charging, whilst USB C output offers power delivery for iPad Pro and USB C equipped laptops and notebooks. Great for those times you’re away from a mains outlet! Includes micro USB charging cable.

            This battery bank can be recharged either through the micro USB input or via the USB C input/output port. The USB C input offers faster recharging, so it's perfect for repeated use when out on the road, in the field with drones and photography equipment etc. You can even use it to charge multiple devices at the same time (although be aware there is a max current output and some devices may not charge without the full output of the battery bank - particularly laptops).</p>
        </div>
        <script>

        var productImages = [
                "produktet//PS1065.jpg",
                "produktet//PS1065 (1).jpg",
                "produktet//PS1065 (2).jpg",
                
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