<!DOCTYPE html>
<html> 
    
    <head> 
        <title> Components 4</title> 
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
            <img src="produktet\PS2319.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>
<div>
            <img src="produktet\PS2319.jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(0)"></img>
            
         
        </div>
        

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">DESKTOP POWER ADAPTER WITH 2.5MM DC PLUG</p>
                <p class="ProductPrice">Price: $19.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('DESKTOP POWER ADAPTER WITH 2.5MM DC PLUG', 19.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">DESKTOP POWER ADAPTER WITH 2.5MM DC PLUG</p>
        <p>240V AC to 12V DC regulated 10A (10000mAh) Desktop Power adaptor / power pack with a 1.5m cable terminated with a 2.5 DC plug  (2.5ID x 5.5OD x 10L). Supplied with a 2m IEC Power Lead for connection to a 240V mains socket.
            Energy authority approved. MEPS approved. Dimensions: 170 x 60 x 40mm.
            
            Suitable power supply for your electronic devices such as modems, clocks, printers, LED lights, security cameras, etc.
            
            Switchmode or switching power adapter which supplies regulated voltage to your electronic device.
            
            2.1mm DC Plug Centre Positive
            
            Australian SAA safety approved.</p>
        </div>
        <script>

        var productImages = [
                "produktet//PS2319.jpg"
                
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