<!DOCTYPE html>
<html> 
    <title> Headphones </title> 
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
            <img src="produktet\AH0074.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\AH0074.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">SteelSeries Arctis Nova 1 Multi-System Gaming Headset </p>
                <p class="ProductPrice">Price: $49.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('SteelSeries Arctis Nova 1 Multi-System Gaming Headset ', 49.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">SteelSeries Arctis Nova 1 Multi-System Gaming Headset </p>
        <p>Introducing the SteelSeries Arctis Nova 1 Multi-System Gaming Headset – where cutting-edge technology meets immersive gaming experience. These headphones redefine the boundaries of gaming audio, offering a blend of sleek design, unparalleled comfort, and mind-blowing sound quality.

            Crafted with precision, the Arctis Nova 1 boasts a futuristic design that seamlessly combines form and function. The sleek matte finish, accented with RGB lighting, gives it a modern and stylish appearance that stands out in any gaming setup. The ear cups, cushioned with plush memory foam, cradle your ears in comfort, allowing for extended gaming sessions without any discomfort.
            
            What truly sets the Arctis Nova 1 apart is its multi-system compatibility. Whether you're a console enthusiast, a PC gamer, or someone who enjoys mobile gaming, these headphones have got you covered. Equipped with a versatile connectivity system, it effortlessly adapts to various gaming platforms, providing an immersive audio experience no matter where your gaming journey takes you.</p>
        </div>
        <script>

        var productImages = [
                "produktet//AH0074.jpg"
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