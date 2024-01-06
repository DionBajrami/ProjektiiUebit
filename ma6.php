<!DOCTYPE html>
<html> 
   
    <head> 
        <title> Mobile Accessories 6</title> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="icon" type ="image/png" href = "bolt_FILL0_wght400_GRAD0_opsz24.png">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <script src="script.js"></script>
    <header>
        <span class="title">TechZone</span>
            <a id="reg" href="reg.php"><img src="person_FILL0_wght400_GRAD0_opsz24.png">Register/Login</img><a>
                <div class="searchbox">
                    <table class="elementbox">
                        <tr>
                            <td>
                <input type="text" placeholder="Search" class="search">
                </td>
                <td>
                <a href=""><i class="searchicon"><img src="search_FILL0_wght400_GRAD0_opsz24.png" alt="search"></i></a>
            </td>
         <tr>
    </table>
    </div>
        <nav>
            <div class="navbar">
                 
                <div class="links">
                  <a href="index.php">
                    <img src="home_FILL0_wght400_GRAD0_opsz24.png" class="icon">Home</img></a>
                    <a href="Contact Us.php">Contact Us</a>
                    <a href="NewA.php">New Arrivals</a>
                    <a href="Cart.php"><img src="shopping_cart_FILL0_wght400_GRAD0_opsz24.png" class="icon">Cart</img></a>
                  </div>


                       <div class="dropdown">
                        <button> ↓ Products</button>
                       <div class="content">
                        <a href="PowerCatg.php">Power</a>
                        <a href="HDMICatg.php">HDMI</a>
                        <a href="DronesCatg.php">Drones</a>
                        <a href="LEDCatg.php">LED light</a>
                        <a href="MACatg.php">Mobile Accessories</a>
                        <a href="AudioCatg.php">Audio</a>
                        <a href="ComponentsCatg.php">Components</a>
                        <a href="VideoCatg.php">Video</a>


                      </div>
                      
                      </div>
                        
               
            </div>
        </nav>
    </header>
    <body>
        <div class="pContainer">
            <div class="images">
            <img src="produktet\ma6.jpg" id='LargeImage' alt="Power Bank" class="p_main"></img>

            <img src="produktet\ma6.jpg" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle">LISEN Phone Mount for Car Vent [Never Blocking]</p>
                <p class="ProductPrice">Price: $7.99</p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('LISEN Phone Mount for Car Vent [Never Blocking]', 7.99)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle">LISEN Phone Mount for Car Vent [Never Blocking]</p>
        <ul>
            <li>[Enjoy Never Blocking Vent]: With the unique extension-arm and free angle adjustment, this car phone holder vent can make your phone avoid the influence of a/c airflow (None damage to the life of the phone), which also helps you get the comfort brought by the a/c in the car to a greater extent (No blocking airflow). Your driving will be happier and more enjoyable. It is the best choice for your air vent phone holder!</li>
            <li>[Hook the Vent Stably & Never Falling]: The upgraded metal hook wrapped in plastic can firmly hook the vent blades, which also protects your car vent from being scratched or damaged. We believe it will do you a favor. When installing, the hook forms a three-point mechanical support with the baffle to provide double protection for the. Even on the bumpy road, sharp turn, speed bump, emergency brake and other steep road conditions, the phone holder for car won't slip or fall off.</li>
            <li>[One Second Release, Wide Compatibility]: Just a simple touch with the bottom on back of the phone mount , the phone holder for car will release or lock your cell phone within 1 second. Super easy to use while driving. LISEN car vent phone mount with adjustable foot, thicker and wider clamp, making phone mount for car vent fit for all phones (4.0-7.0 inches) and phone cases, such as iPhone 15 pro max.</li>
        </ul>
             
        </div>
        <script>

        var productImages = [
                "produktet//ma6.jpg",

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