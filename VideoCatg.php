<!DOCTYPE html>
<html> 
    <title> Video </title>
    
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="icon" type ="image/png" href = "bolt_FILL0_wght400_GRAD0_opsz24.png">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <?php
   include 'navbar.php';
   ?>
    <body>
        <h1>Video</h1>
        <div class="shopcontainer">
        
            <div class="products">
                <a href="cam.php"> <img src="produktet\Camera.jpg" alt="Camera" class="img"></img></a>
                <div class="info">
                    <a href="cam.php">G-Anica 4K Digital Cameras for Photography</a>
                    <p class="price">$148.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('G-Anica 4K Digital Cameras for Photography', 148.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="cam2.php"> <img src="produktet\Camera3.jpg" alt="Camera" class="img"></img></a>
                <div class="info">
                    <a href="cam2.php">Canon EOS Rebel T7 DSLR Camera with 18-55mm Lens</a>
                    <p class="price">$479.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Canon EOS Rebel T7 DSLR Camera with 18-55mm Lens', 479.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="cam1.php"> <img src="produktet\Camera2.jpg" alt="Camera" class="img"></img></a>
                <div class="info">
                    <a href="cam1.php">Saneen Digital Camera</a>
                    <p class="price">$159.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Saneen Digital Camera', 159.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="cam3.php"> <img src="produktet\Camera4.jpg" alt="Camera" class="img"></img></a>
                <div class="info">
                    <a href="cam3.php">Video Camera Camcorder 4K 64MP 60FPS</a>
                    <p class="price">$244.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Video Camera Camcorder 4K 64MP 60FPS', 244.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="cam4.php"> <img src="produktet\Camera6.jpg" alt="Camera" class="img"></img></a>
                <div class="info">
                    <a href="cam4.php">Noorio B200 Security Camera Wireless Outdoor</a>
                    <p class="price">$87.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Noorio B200 Security Camera Wireless Outdoor', 87.99)">ADD TO CART</div>
                    </div>
            </div>  

            <div class="products">
                <a href="cam5.php"> <img src="produktet\Camera5.jpg" alt="Camera" class="img"></img></a>
                <div class="info">
                    <a href="cam5.php">VETEK Digital Cameras for Photography</a>
                    <p class="price">$99.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('VETEK Digital Cameras for Photography',99.99)">ADD TO CART</div>
                    </div>
            </div>  
        
        </div>
        
        <?php 
   include "footer.php";
   ?>
    
    
        </div>
        <script src="script.js"></script>

    </body>
    </html>