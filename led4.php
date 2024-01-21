<!DOCTYPE html>
<html> 
    <title> led4 </title> 
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
            <img src="produktet\OP1005.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\OP1005.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">RECHARGEABLE 600 LUMENS CREE XML LED T6 HEAD LAMP TORCH</p>
                <p class="ProductPrice">Price: $39.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('RECHARGEABLE 600 LUMENS CREE XML LED T6 HEAD LAMP TORCH', 39.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">RECHARGEABLE 600 LUMENS CREE XML LED T6 HEAD LAMP TORCH</p>
        <p>This high performance headlamp is suitable for working in darkness where you need both hands to be free. It features the incredibly bright and long life CREE XML-T6 LED, which is capable of producing up to 600 Lumens of cool white light. The LED lamp can be tilted 100°. Marine aluminium construction with glass lens and rubber push-button IP66. Soft elastic straps are adjustable to fit different users, helmets, etc. The LED lamp has 3 different operation modes including full or half brightness, plus strobe. It has a long beam range up to 300M. Replaceable rechargeable Li-Ion batteries 18650 for 3200mAh 3.7V (each x2). Can last 2hrs (Full) 4hrs (half). The head lamp unit can be recharged in 4hrs with the 500mA 4.2V power pack included.
             </p>
        </div>
        <script>

        var productImages = [
                "produktet//OP1005.jpg"
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