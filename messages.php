<?php
include_once 'contactMessages_functions.php';
include_once 'user_functions.php';
include_once 'navbar.php';

$userID = isset($_GET['id']) ? $_GET['id'] : null;

$cmf = new contactMessages_functions;
$messages = $cmf->getMessageByUserID($userID);

$uf = new user_functions;
$userDetails = $uf->getUserById($userID);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Messages</title>
    <style>

        h2 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }

        p {
            margin: 10px 0;
        }

        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 15px 0;
        }

    </style>
</head>
<body>
<?php
if ($userDetails) {
    echo "<h2>User Messages from {$userDetails['username']}</h2>";
    echo "<p>Email: {$userDetails['email']}</p>";

    
    foreach ($messages as $message) {
        echo "<p>Subject: {$message['subject']}</p>";
        echo "<p>Message: {$message['messageText']}</p>";
        echo "<p>Sent At: {$message['sentAt']}</p>";
        echo "<hr>";
    }
} else {
    echo "<p>User not found or invalid user ID.</p>";
}
?>
</body>
</html>