<!DOCTYPE html>
<html> 
    <title> led2 </title> 
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
            <div class="images">
            <img src="produktet\SR2050.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\SR2050.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
            <img src="produktet\SR2050 (1).jpg" alt="Power Bank" class="p_preview" id="PowerBank2" onclick="NextImage(1)"></img>
        
            <img src="produktet\SR2050 (2).jpg" alt="Power Bank" class="p_preview" id="PowerBank3" onclick="NextImage(2)"></img>

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">SMART WI-FI SECURITY LED FLOOD LIGHT WITH MOTION SENSOR</p>
                <p class="ProductPrice">Price: $119.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('SMART WI-FI SECURITY LED FLOOD LIGHT WITH MOTION SENSOR', 119.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">SMART WI-FI SECURITY LED FLOOD LIGHT WITH MOTION SENSOR</p>
        <p>This 2 x 13W Smart Wifi LED security spot light with a motion sensor will instantly react to intruders by turning lights on when it detects motion. It has light level controls to prevent daytime operation and timer controls to adjust the length of time the light is on. IP54 rated to suit outdoor operation. 26W LEDs, swivel and rotatable stand, Die-cast metal construction, 240Vac screw terminals (Requires electrician installation).
            The 2x 13W smart double head outdoor security spot light with motion sensor allows intruder detection and turn on the light when the motion sensor is triggered. This LED is managed by the Tuya smart App available on the Apple App Store, or Google Play Store. You can use the App to adjust colour temperature from warm white (3000K) to cool white (6000K). The App can also adjust the motion detection range and the level of brightness the ambient light sensor will triggered. The enclosure is IP65 ingress rated to suit indoor or outdoor use. The LED heads and motion sensor are adjustable.</p>
        </div>
        <script>

        var productImages = [
                "produktet//SR2050.jpg",
                "produktet//SR2050 (1).jpg",
                "produktet//SR2050 (2).jpg"
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