<!DOCTYPE html>
<html> 
   
    <head> 
        <title> Mobile Accessories 4</title> 
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
            <img src="produktet\ma4.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\ma4.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">Turtle Beach Atom Mobile Game Controller with Bluetooth</p>
                <p class="ProductPrice">Price: $74.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Turtle Beach Atom Mobile Game Controller with Bluetooth', 74.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">Turtle Beach Atom Mobile Game Controller with Bluetooth</p>
        <ul>
            <li>Convenient, Compact Shape Magnetically Fuses Together</li>
            <li>Low Latency Bluetooth Connection to iPhones</li>
            <li>Built for Cloud Gaming on GeForce Now, Steam Link, and More</li>
            <li>Familiar Controls for a Console Experience on Mobile</li>
            <li>Adjustable Phone Clamps fit all iPhone 15,14,13,12, &11 models</li>
            <li>Long-Lasting 20-Hour Battery with Quick-Charge</li>
           
        </ul>
             
        </div>
        <script>

        var productImages = [
                "produktet//ma4.jpg",

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