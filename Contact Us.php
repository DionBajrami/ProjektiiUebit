<?php
include 'navbar.php';
include 'contactmessages_functions.php';


echo '<pre>';
print_r($_SESSION);
echo '</pre>';



$userLoggedIn = isset($_SESSION['username']); 

if ($userLoggedIn && isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $messageFunctions = new contactmessages_functions();
        $userDetails = $messageFunctions->getUserDetailsById($userId);

        if ($userDetails) {
            $senderUsername = $userDetails['username'];  
            $senderEmail = $userDetails['email']; 

            $subject = $_POST['subject'];
            $messageText = $_POST['message'];

            $message = new contactmessages($userId, $senderUsername, $senderEmail, $subject, $messageText);

            $messageFunctions->saveMessage($message);
        } 
    } else {
        echo "Invalid request method.";
    }
} else {
    echo "User not logged in.";
}


/*
include 'navbar.php';
include_once 'user_functions.php';
include_once 'contactmessages_functions.php';
include_once 'contactmessages.php';

$contactMessageFunctions = new contactmessages_functions;

$userID = isset($_SESSION['userID']) ? $_SESSION['userID'] : null;

$uf = new user_functions;
$messages = $contactMessageFunctions->getMessagesForAdmin();

$userLoggedIn = isset($_SESSION['username']);

$contactMessage = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message'])) {
    if (isset($_SESSION['userID']) && isset($_POST['sendbtn'])) {
        $userID = $_SESSION['userID'];
        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
        $subject = $_POST['subject'];
        $messageText = $_POST['message'];

        $contactMessage = new contactmessages($userID, $_SESSION['username'], $email, $subject, $messageText);

        $contactMessageFunctions->saveMessage($contactMessage);
        $messages = $contactMessageFunctions->getMessagesForAdmin();
    }
} */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>

    <main>
        <largetext>Contact Us</largetext>
        <div class="right">
        <form id="contactForm" method="post" action="" onsubmit="return validateForm();">
         <div class="wrapper">
                    <?php
                    if ($userLoggedIn) {
                        ?>
                        <input type="text" name="subject" placeholder="Subject" maxlength="25" style="text-align:center;border-bottom:none;width:100%;"><br>
                        <textarea placeholder="Message" maxlength="400" name="message" id="message"></textarea>
                        <span id="messageError" class="error"></span>
                </div>
                <button type="submit" name="sendbtn">SEND</button>
                 <?php
                 } else {
                    echo '<p class="title" style="font-size:14px;color:gray;">-Please log in to send a message-</p>';
                }
                ?>
            </form>
        </div>
    </main>

    <style>
        .error {
            color: rgb(241, 75, 75);
            margin: 5px;
        }
    </style>

    <?php
    include "footer.php";
    ?>
</body>
<script>
         function validateForm() { 
        let message = document.getElementById('message');
        let messageregex = /.{10,}$/;

        if (!messageregex.test(message.value)) {
            messageError.innerText = 'The message should be at least 10 characters long!';
            return false;
        }
        return true;
    }
        </script>
</html>