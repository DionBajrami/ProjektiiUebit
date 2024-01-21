<!DOCTYPE html>
<html> 
    <title> Components 1</title> 
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
            <img src="produktet\SP0270.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>
<div>
            <img src="produktet\SP0270.jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(0)"></img>
            <img src="produktet\SP0270 (1).jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(1)"></img>
            <img src="produktet\SP0270 (2).jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(2)"></img>
         
        </div>
        

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">42000mAh Portable Power Generator with Inverter</p>
                <p class="ProductPrice">Price: $299.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('42000mAh Portable Power Generator with Inverter', 299.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">42000mAh Portable Power Generator with Inverter</p>
        <p>A complete mobile AC/DC power solution designed to be recharged via solar panels with in-built MPPT charging circuit. Includes 100W modified sine wave inverter for AC power when away from mains. Plus, 6A total USB output (Type C & QC3.0) & 180W DC 12V (via 2.1mm DC jacks) for powering appliances & devices. It can also shed some light where you need it with a super bright front mount torch and side mount LED reading light. Features a host of protection features including short circuit, over-current, over-load, low voltage & over temperature. Includes car charger, mains power supply, car accessory socket adaptor & MC4 solar panel adaptor. Size: 195W x 171H x 90Dmm.</p>
        </div>
        <script>

        var productImages = [
                "produktet//SP0270.jpg",
                "produktet//SP0270 (1).jpg",
                "produktet//SP0270 (2).jpg"
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