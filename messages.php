<?php
include_once 'contactmessages_functions.php';
include_once 'navbar.php';

$cf = new contactmessages_functions;
$userID = isset($_GET['userID']) ? $_GET['userID'] : null;

    $messages = $cf->getMessageByUserID($userID);

    if ($messages) {
        $contactmessage = new contactmessages(
            $messages['SenderUsername'],
            $messages['subject'],
            $messages['message_text']
        );
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Messages</title>
        </head>

        <body>

            <main>
                <largetext>Contact Messages from User <?php echo $SenderUsername; ?></largetext>
                <div class="messages-container">
                    <?php foreach ($messages as $message) { ?>
                        <div class="message">
                        <p><?php echo htmlspecialchars($message['senderUsername']); ?></p>
                        <p><?php echo htmlspecialchars($message['subject']); ?></p>
                        <p><?php echo htmlspecialchars($message['message_text']); ?></p>
                        </div>
                    <?php } ?>
                </div>
            </main>

            <?php
            include "footer.php";
            ?>
        </body>

        </html>
        <?php
    } else {
    echo "No messages from this User";
}
?>