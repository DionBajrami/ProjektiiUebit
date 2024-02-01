<?php
include_once 'contactMessages_functions.php';
include_once 'navbar.php';

$userID = isset($_GET['userID']) ? $_GET['userID'] : null;

$cmf = new contactMessages_functions;
$messages = $cmf->getMessageByUserID($userID);
$userLoggedIn = isset($_SESSION['username']);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sendbtn'])) {
    $userID = isset($_SESSION['username']) ? $_SESSION['username'] : null;
    $subject = $_POST['subject'];
    $messageText = $_POST['message'];
    $sentAt = date('Y-m-d H:i:s');


    $cmf->saveMessage($userID, $subject, $messageText, $sentAt);

    $messages = $cmf->getMessageByUserID($userID);
    echo '<script>console.log("message saved");</script>';
}else{
    echo '<script>console.log("message wasn\'t sent");</script>';
} 
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
        <form id="contactForm" method="post" action="Feedback.php" onsubmit="return validateForm();">
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