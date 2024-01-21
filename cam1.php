<!DOCTYPE html>
<html> 

    <head> 
        <title> Camera 2 </title> 
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
            <img src="produktet\Camera2.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\Camera2.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">Saneen Digital Camera</p>
                <p class="ProductPrice">Price: $159.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Saneen Digital Camera', 159.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">Saneen Digital Camera</p>
        <ul>
            <li>📷【4K & 64MP digital cameras for photography】📷:This digital camera has a 4k video resolution and 56 Megapixel Sensorthat lets you enjoy amazing picture quality without missing any details.HD digital camera with maximum 4K/30FPS (MP4) to capture all your unforgettable moments with ease.Multiple video and photo sizes are up to you - video resolution：4K /2.7K /1080P/720P; photo pixel:56M/48M/30M/24M.</li>
            <li>📷【Doubles as A Webcam & Pause Function】📷:Connect to PC and work as webcam to video calling & live streaming.This sturdy digital camera is quick to transfer your pictures to the PC via USB cable, so you can share your wonderful moments to social media.The 4k digital youtube camera for vlogging have an excellent PAUSE FUNCTION which allows you to continue recording in the same File without restarting a new one.</li>
            <li>📷【WiFi & HDMI Output Function 】📷:Saneen WiFi digital camera makes you can share the photos and videos online with mobile phones instantly, allowing friends to share your happiness in the first time without waiting any longer. This camcorder supports TV output and can be connected to TV to share your video with family and friends.</li>
            <li>📷【4.0" Touch Screen & Dual-Lens cameras】📷:Compared with other cameras, this vlogging camera supports 4.0-inch touch screen, which is more convenient to change parameters or browse videos. Equipped with dual lens,easy switching to front camera, you can see what you are recording or the picture framing while doing self blogging. it is easier to do video recording.</li>
            <li>📷【What You Get & Warranty】📷:This digital camera has a compact design, measures 4.52*1.8*2.75inches. Bundle Items Include:Digital Camera x 1; 3000mAH Lithium Battery x1; USB cable x1; User Manual x1；32GB SD card x1,Charger x1,Lanyard x1,Lens Hood x1,Camera bag x1, to store MORE THAN 8500 photos!We provide 12 months warranty, 30 days no reason to return, if you have any questions please contact us.</li>
        </ul>
             
        </div>
        <script>

        var productImages = [
                "produktet//Camera2.jpg"
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