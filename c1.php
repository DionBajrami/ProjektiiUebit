<!DOCTYPE html>
<html> 
    <title> 5V USB Port Mains Charger </title> 
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
            <img src="produktet\PS2015.jpg" style="margin-right: 0px;height: 500px;" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <div>
            <img src="produktet\PS2015.jpg" style="width:110px;height:110px"alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
            
            </div>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">5V USB Port Mains Charger</p>
                <p class="ProductPrice">Price: $9.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('5V USB Port Mains Charger', 9.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">5V USB Port Mains Charger</p>
        <p>A 240VAC Mains charger with a total output of 2.1 Amps. Charge your electronic devices such as smartphones and tablets simultaneously with this USB Wall Charger. White colour. Meets Australian SAA Safety standards.  
            An amazing full featured drone suitable for beginners and advance flyers. Offers great bang for your buck with stable performance and quality to match.</p>
        </div>
        <script>

            var productImages = [
                "produktet//PS2015.jpg",
                
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