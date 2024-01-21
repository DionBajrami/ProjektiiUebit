<!DOCTYPE html>
<html> 
   
    <head> 
        <title> Mobile Accessories 5</title> 
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
            <img src="produktet\ma5.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\ma5.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">XINBAOHONG Rechargeable Selfie Light</p>
                <p class="ProductPrice">Price: $17.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('XINBAOHONG Rechargeable Selfie Light', 17.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">XINBAOHONG Rechargeable Selfie Light</p>
        <ul>
            <li>【3 Light Modes & 10 Brightness Levels】The selfie light has 3 Light Modes(3000K-6500K), which are provided to meet your various usage needs, the high CRI rating of 90+ allows you to be charming in any situation, such as makeup lighting, selfies, video recording, video conference, vlog show, live streaming. Led selfie light for phone built-in 80 LED lighting beads to improve the quality of night. The fill light is softer, brighter not dazzling, and can protect your eyes well.</li>
            <li>【2000mAh Rechargeable Battery】The led selfie light built-in 2000mAh rechargeable battery and USB Type-C charging port. This cell phone fill light is easily charged by laptops, PCs, power banks, USB chargers, car chargers, etc. Allows you to use it everywhere. The camera light provides up to 3 hours of use at maximum brightness. Never worry about running out of power with this durable and reliable phone light clip.</li>
            <li>【Clip-on Design】Easy and secure attachment, our selfie light for phone easily clips onto your device without obstructing the camera or screen. With silicone padding inside, your device is protected from scratches, and the 180-degree adjustable angle offers the optimal lighting direction. There is a cold shoe mount with ¼" thread embedded for cameras, tripods, selfie sticks, make it ideal for photography, video recording or traveling.</li>
            <li>【Lightweight and Portable】The lightweight and portable size of the cell phone fill light even allows you to carry it with you at night for outdoor live broadcasts/selfies without any burden. The extra storage pouch makes it easier to carry.</li>
            <li>【Wide Compatibility 】Tiktok light for phone, this selfie clip light is a perfect gift for selfie loving person, or someone that posts a lot of videos. Be suitable video conference lighting/video conferencing/remote working/zoom call lighting/self broadcasting and live streaming/vlog video/TikTok. Phone light with multiple shooting angles & high compatibility.</li>
        </ul>
             
        </div>
        <script>

        var productImages = [
                "produktet//ma5.jpg",

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