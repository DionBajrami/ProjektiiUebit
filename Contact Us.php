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
    <?php
   include 'navbar.php';
   ?>

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

