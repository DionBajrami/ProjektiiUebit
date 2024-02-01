<?php
include_once 'comment_functions.php';

$productID = isset($_GET['productID']) ? $_GET['productID'] : null;
$userID = isset($_GET['userID']) ? $_GET['userID'] : null;

$cf = new comment_functions;
$comments = $cf->getCommentByProduct($productID);
$userLoggedIn = isset($_SESSION['username']);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comment'])) {
    $productID = $_POST['productID'];
    $userID = isset($_SESSION['username']) ? $_SESSION['username'] : null;
    
    $commentText = $_POST['comment'];

    $cf->insertComment($productID, $userID, $commentText);

    $comments = $cf->getCommentByProduct($productID);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Comments</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
<div class="ccontainer">
        <?php
        if ($userLoggedIn) {
            echo "<div class='cform'>";
            echo "<form action='{$_SERVER['PHP_SELF']}?productID={$productID}' method='post' enctype='multipart/form-data'>";
            echo '<textarea name="comment" placeholder="Add your comment"></textarea>';
            echo '<input type="hidden" name="productID" value="' . $productID . '">';
            echo '<input type="hidden" name="username" value="' . $_SESSION['username'] . '">';
            echo '<button type="submit">Add comment</button>';
            echo '</form>';
            echo "</div>";
        } else {
            echo '<p>Please log in to leave a comment.</p>';
        }

        if (!empty($comments)) {
            foreach ($comments as $comment) {
                $userDetails = $cf->getUserDetailsById($comment['userID']);
                echo '<div class="comment">';
                echo '<p class="csection">' . htmlspecialchars($userDetails['username']) . ': ' . htmlspecialchars($comment['commentText']) . '</p>';
                echo '</div>';
            }
        } else {
            echo '<p class="noComments">No comments yet.</p>';
        }
        ?>
    </div>
</body>
</html>