<!DOCTYPE html>
<html> 

    <head> 
        <title> Camera 3 </title> 
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
            <img src="produktet\Camera3.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\Camera3.jpg" alt="Power Bank" class="p_preview"  onclick="NextImage(0)"></img>
        
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">Canon EOS Rebel T7 DSLR Camera with 18-55mm Lens</p>
                <p class="ProductPrice">Price: $479.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Canon EOS Rebel T7 DSLR Camera with 18-55mm Lens', 479.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">Canon EOS Rebel T7 DSLR Camera with 18-55mm Lens</p>
        <ul>
            <li>24.1 Megapixel CMOS (APS-C) sensor with is 100–6400 (H: 12800)</li>
            <li>9-Point AF system and AI Servo AF</li>
            <li>Built-in Wi-Fi and NFC technology</li>
            <li>Optical Viewfinder with approx 95% viewing coverage</li>
            <li>Use the EOS Utility Webcam Beta Software (Mac and Windows) to turn your compatible Canon camera into a high-quality webcam. Compatible Lenses- Canon EF Lenses (including EF-S lenses, excluding EF-M lenses)</li>
        </ul>
             
        </div>
        <script>

        var productImages = [
                "produktet//Camera3.jpg"
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