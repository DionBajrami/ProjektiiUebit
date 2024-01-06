<!DOCTYPE html>
<html> 
    <title> Electronics Shop </title>
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content=""IE=edge>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="icon" type ="image/png" href = "bolt_FILL0_wght400_GRAD0_opsz24.png">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>
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
    <style>
        .searchbox{
                visibility: hidden;
            }
    </style>
        <nav>
            <div class="navbar">
                
                 
                <div class="links">
                  <a href="Electronics Shop.php">
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

        <div class="register-login-title">
            <h1>My Account</h1>
        </div>
        <hr class="line">
        
        
        <div class="register-login-container">
            <div class="sign-up-container">
                <div class="register-login-box">
                    <form action="">
                        <h1>Create Account</h1><hr>
                        <div class="register-login-form-group">
                            <label for="register email">E-mail 
                                <div class='invalid' id="invalidRegisterEmail"></div></label>
                            <input id="registerEmail" type="email" placeholder="name@example.com" required>
                        </div>
                        <div class="register-login-form-group">
                            <label for="register password">Password 
                                <div class='invalid' id="invalidRegisterPassword"></div></label>
                            <input id="registerPassword" type="password" placeholder="" required>
                        </div>
                        <div class="register-login-form-group">
                            <label for="confirm password" >Confirm Password 
                                <div class='invalid' id="invalidConfirmPassword"></div></label>
                            <input id="confirmPassword" type="password" placeholder="Re-write password" required>
                        </div>
                        <p><input type="checkbox" id="subscribe"> Subscribe to Newsletter</p>
                        <button type="submit" onclick="validateRegisterForm()">Register</button>
                    </form>
                </div>
            </div>
            <div class="log-in-container">
                <div class="register-login-box">
                    <form action="">
                        <h1>Log In</h1><hr>
                        <div class="register-login-form-group">
                            <label for="login email">E-mail 
                                <div class='invalid' id="invalidLoginEmail"></div></label>
                            <input id="loginEmail" type="email" required>
                        </div>
                        <div class="register-login-form-group">
                            <label for="login password">Password 
                                <div class='invalid' id="invalidLoginPassword"></div></label>
                            <input id="loginPassword" type="password" required>
                        </div>
                        <p><input type="checkbox"> Remember me</p>
                        <button type="submit" onclick="validateLoginForm()">Log In</button>
                    </form>
                </div>
            </div>
        </div>

        <footer>
        
            <div class="footermain">
                    <div class="footerleft" >
                        <div class="f">About TechZone</div>
                        <p>At TechZone, we transcend the ordinary, propelling you into a realm where cutting-edge technology meets unparalleled convenience. Founded with a passion for innovation and a commitment to providing top-notch electronic solutions, TechZone is not just an online electronic shop; it's an experience.</p>
                    </div>
                    <div class="footercenter" >
                        <div class="f">Our Links</div>
                        <p>Advertise</p>
                        <p>Support</p>
                        <p>Our Company</p>
                        <p>Contact</p>
                    </div>
                    <div class="footerright" >
                        <div class="ff" >
                            <a href=""><img src="facebook.png" alt="" width="32px" height="32px"></a>
                            <a href=""><img src="twitter.png" alt="" width="32px" height="32px"></a>
                            <a href=""><img src="instagram.png" alt="" width="32px" height="32px"></a>
                           
                        </div>
                        <p>Terms of use</p>
                        <p>Privacy Policy</p>
                    </div>
                </div>
    
                <div class="fundi">
                    <p>Copyright 2023 TechZone Company. All rights reserved.</p>
                    <p>Designed by Dion Bajrami dhe Edin Gurgule</p>
                </div>

        <script>

            var emailRegex = /^[a-zA-Z0-9.?-_+]+@+[a-z]+\.+[a-z]{2,3}$/;
            var passwordRegex = /^[a-zA-Z0-9+=?,.!]{8,30}$/;

            let registerEmailInput = document.getElementById('registerEmail');
            let registerPasswordInput = document.getElementById('registerPassword');
            let confirmPaswwordInput = document.getElementById('confirmPassword');

            let loginEmailInput = document.getElementById('loginEmail');
            let loginPasswordInput = document.getElementById('loginPassword');


            let invalidRegisterEmail = document.getElementById('invalidRegisterEmail');
            let invalidRegisterPassword = document.getElementById('invalidRegisterPassword');
            let invalidConfirmPassword = document.getElementById('invalidConfirmPassword');

            let invalidLoginEmail = document.getElementById('invalidLoginEmail');
            let invalidLoginPassword = document.getElementById('invalidLoginPassword');


            function validateRegisterForm(){
                invalidRegisterEmail.innerText = '';
                invalidRegisterPassword.innerText = '';
                invalidConfirmPassword.innerText = '';

                if(!emailRegex.test(registerEmailInput.value)){
                    invalidRegisterEmail.innerText = 'Invalid email';
                }else{
                    invalidRegisterEmail.innerText = '';
                }

                if(!passwordRegex.test(registerPasswordInput.value)){
                    invalidRegisterPassword.innerText = 'Invalid password';
                }else{
                    invalidRegisterPassword.innerText = '';
                }

                if(registerPasswordInput.value != confirmPaswwordInput.value){
                    invalidConfirmPassword.innerText = 'Passwords don\'t match';
                }else{
                    invalidConfirmPassword.innerText = '';
                }
            }

            function validateLoginForm(){
                invalidLoginEmail.innerText = '';
                invalidLoginPassword.innerText = '';

                if(!emailRegex.test(loginEmailInput.value)){
                    invalidLoginEmail.innerText = 'Invalid email';
                }else{
                    invalidLoginEmail.innerText = '';
                }

                if(!passwordRegex.test(loginPasswordInput.value)){
                    invalidLoginPassword.innerText = 'Invalid password';
                }else{
                    invalidLoginPassword.innerText = '';
                }
            }

        </script>
    </body>