<!DOCTYPE html>
<html> 
    <title> MJX Drone </title> 
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
            <img src="produktet\TR3810a (4).jpg" style="margin-right: 0px;height: 500px;" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <div>
            <img src="produktet\TR3810a (4).jpg" style="width:110px;height:110px"alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
            <img src="produktet\TR3810a.jpg" style="width:110px" alt="Power Bank" class="p_preview" id="PowerBank2" onclick="NextImage(1)"></img>
        
            <img src="produktet\TR3810a (3).jpg" style="width:110px"  alt="Power Bank" class="p_preview" id="PowerBank2" onclick="NextImage(2)"></img>

            <img src="produktet\TR3810a (1).jpg" style="width:110px" alt="Power Bank" class="p_preview" id="PowerBank2" onclick="NextImage(3)"></img>

            <img src="produktet\TR3810a (2).jpg" style="width:110px" alt="Power Bank" class="p_preview" id="PowerBank3" onclick="NextImage(4)"></img>
            </div>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">MJX BUGS 5W BRUSHLESS GPS WIFI 4K FPV DRONE WITH 2 BATTERIES</p>
                <p class="ProductPrice">Price: $499.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('MJX BUGS 5W BRUSHLESS GPS WIFI 4K FPV DRONE WITH 2 BATTERIES', 499.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">MJX BUGS 5W BRUSHLESS GPS WIFI 4K FPV DRONE WITH 2 BATTERIES</p>
        <p>2 Battery Fly More Pack for a total of 40 Minutes Flight Time.
            The newly upgraded Bugs 5W is a GPS Brushless Drone with a 4K FPV Camera with a one axis Gimbal. The upgraded MT2204 brushless motor drone is powerful and can withstand light wind conditions; withs its powerful 4K HD Wi-fi Camera and wide angle lens, it is able to stream real time video directly to your smartphone for viewing and recording up to 300m away. The single axis gimbal stabilisation system assists in keeping the recording stable and allows camera angle position for you to capture the desired photo and video.
            Equipped with a digital 2.4GHz two way remote controller with a 1km control range, it is able to notify the user under low battery or low signal to ensure reliable connection to the Bugs 5W drone at all time. The GPS functionality matched with Barometric pressure sensor, it offers amazing stable flight and altitude positioning plus a one key return to home functionality.  
            An amazing full featured drone suitable for beginners and advance flyers. Offers great bang for your buck with stable performance and quality to match.</p>
        </div>
        <script>

            var productImages = [
                "produktet//TR3810a (4).jpg",
                "produktet//TR3810a.jpg",
                "produktet//TR3810a (3).jpg",
                "produktet//TR3810a (1).jpg",
                "produktet//TR3810a (2).jpg"
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