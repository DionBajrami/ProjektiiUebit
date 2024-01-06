<!DOCTYPE html>
<html> 
    <title> Contact Us </title>
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="icon" type ="image/png" href = "bolt_FILL0_wght400_GRAD0_opsz24.png">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/7d49814b59.js" crossorigin="anonymous"></script>

        <script>
            function validateForm() {
            
                let name = document.getElementById('name');
                let lastname = document.getElementById('lastname');
                let email = document.getElementById('email');
                let message = document.getElementById('message');
    
                let nameregex = /^[A-Z][a-z]{2,8}$/;
                let lastnameregex = /^[A-Z][a-z]{2,8}$/;
                let emailregex = /^[A-Za-z0-9_-]{1,40}@[a-z-/s]+\.+[a-z/s]{2,4}$/;
                let messageregex = /.{10,}/;

                
    
                if (!nameregex.test(name.value)){
                    nameError.innerText = 'Fill the name with a capital letter and size between 2-8';
                    return ;
                }
                
                if (!lastnameregex.test(lastname.value)) {
                    lastnameError.innerText = 'Fill the last name with a capital letter and size between 2-8';
                    return ;
                }
                if (!emailregex.test(email.value)) {
                    emailError.innerText = 'Enter a valid email';
                    return ;
                }
                if (!messageregex.test(message.value)) {
                    messageError.innerText = 'The message should be at least 10 characters long!';
                    return ;
                }
    
                window.location.href = 'Feedback.php';
            }
        </script>

    </head>
    <body>
    <header>
        <style>
            .searchbox{
                visibility: hidden;
            }
        </style>
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
    </tr>
</table>
</div>
    <nav>
        <div class="navbar">
             
            <div class="links">
              <a href="index.php">
                <img src="home_FILL0_wght400_GRAD0_opsz24.png" class="icon">Home</img></a>
                <a href="Contact Us.php" style="border-bottom: 4px solid rgb(13, 218, 105);">Contact Us</a>
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

    <main>
        
        

    
    <largetext>Contact Us</largetext>
    <div class="right">
        <input type="text" placeholder="First Name" minlength="2" maxlength="20" id="name">
        <span id="nameError" class="error"></span>

        <input type="text" placeholder="Last Name" minlength="2" maxlength="20" id="lastname">
        <span id="lastnameError" class="error"></span>

        <input type="email" placeholder="Email" maxlength="40" id="email"> 
        <span id="emailError" class="error"></span>

        <div class="wrapper">
        <textarea placeholder="Message" maxlength="400" id="message"></textarea>
        <span id="messageError" class="error"></span>

             </div>
             <button class="send" onclick="validateForm()">SEND</button>
        </div>
        <style>
            .error{
        color: rgb(241, 75, 75);
        margin: 5px;
    }
        </style>
        
  
</main>

<?php 
   include "footer.php";
   ?>
</body>
</html>
