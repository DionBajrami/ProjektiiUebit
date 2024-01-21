<!DOCTYPE html>
<html> 

    <head> 
        <title> Camera 5 </title> 
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
            <img src="produktet\Camera6.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\Camera6.jpg" alt="Camera" class="p_preview"  onclick="NextImage(0)"></img>
        
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">Noorio B200 Security Camera Wireless Outdoor</p>
                <p class="ProductPrice">Price: $87.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('Noorio B200 Security Camera Wireless Outdoor', 87.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">Noorio B200 Security Camera Wireless Outdoor</p>
        <ul>
            <li>Built-in Spotlight: The motion-activated spotlight illuminates the surroundings when motion is detected and stops unwanted visitors. Color night vision shows more details.</li>
            <li>Advanced AI Detection: Only human movements can be detected and trigger video recording, differentiating between humans and other subjects like animals, swaying trees, and cars.</li>
            <li>No Hidden Costs: Store up to 3000 pieces of footage in 8GB local storage without a subscription. Not support external storage method. Limited FREE cloud service is available via our customer support!</li>
            <li>100% Wire-free: Allow for completely wire-free installation anywhere, outdoor or indoor, and keep being motion-activated 24/7 with the built-in rechargeable battery for 180 days.</li>
        </ul>
             
        </div>
        <script>

        var productImages = [
                "produktet//Camera6.jpg"
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