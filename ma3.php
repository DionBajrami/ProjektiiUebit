<!DOCTYPE html>
<html> 
   
    <head> 
        <title> Mobile Accessories 3</title> 
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
            <img src="produktet\ma3.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\ma3.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">LISEN Cell Phone Stand</p>
                <p class="ProductPrice">Price: $15.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('LISEN Cell Phone Stand', 15.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">LISEN Cell Phone Stand</p>
        <ul>
            <li>TALLER AND MORE PHOTOGENIC STAND, HELP TO CORRECT THE "TEXT NECK": This cell phone stand holder is in accordance with ergonomic design. Providing you comfortable viewing angle which helps to fix your posture and reduce neck & back strain. The height can be easily adjusted between 7.1in-8.5in(1.4in adjustable range), the angle is adjustable between 5°~85°</li>
            <li>USER-FRIENDLY DESIGN: [No bent & tangling & tip over worries] when using while charging. Due to bent cable, the low phone dock maybe fall over. LISEN stylish adjustable phone holder for desk has a reserved charging hole design, supports cable management, [No bent & tangling & tip over worries]. This phone pad will not cover the subtitle when you watch the video</li>
            <li>WEIGHTED ANTI-SLIP BASE: This cell phone stand for desk is equipped with a weighted base and an aluminum alloy rod. Therefore, this iPhone stand holder is stable enough to support all smartphones or small tablets, such as 2023 iPad Mini, iPhone 15 14 pro max 13 Pro/13 Mini/12/12 Pro/12 Pro Max/12 Mini/iPhone 11/11 Pro/Max/X/MAX/XR/8/8P, Samsung Galaxy S22, S22, Note 10/9/8/Plus, S10/S9/S8, Kindel, Switch, iPad Mini,iPad Air, etc.We recommend the most stable compatible device size is 4-10 inchs</li>
           
        </ul>
             
        </div>
        <script>

        var productImages = [
                "produktet//ma3.jpg",

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