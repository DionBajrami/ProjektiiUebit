<?php
include_once('DatabaseConnection.php');
include_once('products.php');
include_once('users.php');

class comment_functions{
    private $connection;

    public function __construct(){
        $conn = new DatabaseConnection;
        $this->connection=$conn->startConnection();

    }

    public function insertComment($productID, $username, $commentText) {
        $conn = $this->connection;
    
        $sqlUserID = "SELECT id FROM users WHERE username = ?";
        $statementUserID = $conn->prepare($sqlUserID);
        $statementUserID->execute([$username]);
        $resultUserID = $statementUserID->fetch(PDO::FETCH_ASSOC);
    
        if (!$resultUserID) {
            echo "<script>console.log('User not found.');</script>";
            return; 
        }
    
        $userID = $resultUserID['id'];
    
        $sql = "INSERT INTO comments (productID, userID, commentText) VALUES (?, ?, ?)";
        try {
            $statement = $conn->prepare($sql);
            $statement->execute([$productID, $userID, $commentText]);
            echo "<script>console.log('comment added successfully')</script>";
        } catch (PDOException $err) {
            echo 'Error: ' . $err->getMessage();
            error_log("Error in insertComment: " . $err->getMessage());
        }
    }
    
    

    function deleteComment($commentID){
        $conn=$this->connection;
        $sql = "DELETE FROM comments WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$commentID]);
    }

    public function editComment($id, $text){
        $conn = $this->connection;
        $sql = "UPDATE comments SET commentText=? WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$text,$id]);

        echo "<script>console.log('Comment added successfully')</script>";
    }

    public function getCommentByProduct($id){
        $conn = $this->connection;
        $sql = "SELECT * FROM comments WHERE productID=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $comments = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $comments;
    }

    public function getCommentByUser($id){
        $conn = $this->connection;
        $sql = "SELECT * FROM comments WHERE userID=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $comments = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $comments;
    }
    function getUserDetailsById($userID) {
        $conn = $this->connection;
        $sql = "SELECT username FROM users WHERE id = ?";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$userID]);
        $userDetails = $statement->fetch(PDO::FETCH_ASSOC);
    
        return $userDetails;
    }
}
?>