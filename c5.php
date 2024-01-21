<!DOCTYPE html>
<html> 
    <title>C14 IEC 10A MAINS REWIREABLE PLUG</title> 
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
            <div class="images" style="width: 600px;">
            <img src="produktet\PB5170.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <div>
            <img src="produktet\PB5170.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        </div>
            

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">C14 IEC 10A MAINS REWIREABLE PLUG</p>
                <p class="ProductPrice">Price: $6.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('C14 IEC 10A MAINS REWIREABLE PLUG ', 6.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">C14 IEC 10A MAINS REWIREABLE PLUG</p>
        <p>Rewireable C14 IEC In-line Mains Plug
            10A Rated with screw terminal. Suitable for use with ordinary duty PVC cables.
            Rewireable IEC C14 Plug for custom made cables.
            Note: Must be installed by a licensed electrician</p>
        </div>
        <script>

        var productImages = [
                "produktet//PB5170.jpg",
                
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