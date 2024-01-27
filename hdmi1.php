<?php
include 'navbar.php';
include 'products.php';
include 'product_functions.php';

$productID = isset($_GET['productID']) ? $_GET['productID'] : null;
$productFunctions = new product_functions;

$productDetails = $productFunctions->getProductById($productID);

if ($productDetails) {
    $product = new Product(
        $productDetails['name'],
        $productDetails['imagePath'],
        $productDetails['description'],
        $productDetails['price'],
        $productDetails['category']
    );
  ?>

<!DOCTYPE html>
<html> 
    <title> HDMI1 </title>
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="icon" type ="image/png" href = "bolt_FILL0_wght400_GRAD0_opsz24.png">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
    <script src="script.js"></script>
    <body>
        <div class="pContainer">
            <div class="images" style="width: 600px;">
            <img src="produktet\AA6380.png" id='LargeImage' alt="Power Bank" class="p_main"></img>
          
            <img src="produktet\AA6380.png" alt="Power Bank" class="p_preview" id="PowerBank1" onclick="NextImage(0)"></img>
        
            <img src="produktet\AA6380.jpg" alt="Power Bank" class="p_preview" id="PowerBank2" onclick="NextImage(1)"></img>
        
            <img src="produktet\AA6380 (1).jpg" alt="Power Bank" class="p_preview" id="PowerBank3" onclick="NextImage(2)"></img>

            <br>
            
        </div>
            <div class="info_container">
            <div class="p_info">
                <p class="ProductTitle"><?php echo $product->getName()?> </p>
                <p class="ProductPrice">Price: $<?php echo $product->getPrice()?></p>
                    <div class="addcart" onclick="addToCart1(this);
                    addToCart('<?php echo $product->getName()?> ', <?php echo $product->getPrice()?>)">ADD TO CART</div>
            </div>
            </div>
        </div>
    
       <div class="description">
        <div class="desc">Description</div>
        <p class="ProductTitle"><?php echo $product->getName()?> </p>
        <p><?php echo $product->getDescription()?></p>
        </div>

        <script>
            var productImages = [
                "produktet//AA6380.png",
                "produktet//AA6380.jpg",
                "produktet//AA6380 (1).jpg"
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
        <?php
        } else{
            echo "<p style=background-color:red;font-size:20px;>No product was found with the given ID</p>";
        }?>
    </body>
    <?php
    
    include 'comments.php';
    include 'footer.php'; 
    ?>
</html>
