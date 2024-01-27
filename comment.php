<?php

//include 'users.php';
//include 'products.php';
include 'DatabaseConnection.php';
include 'comment_functions.php';

class comment{
    private $id;
    private $productID;
    private $userID;
    private $commentText;
    private $connection;


    public function __construct($productID,$userID,$commentText, $connection){
        $this->productID = $productID;
        $this->userID = $userID;
        $this->commentText = $commentText;
        $this->connection = $connection;
    }

    public function getProductID(){
        return $this->productID;
    }

    public function getUserID(){
        return $this->userID;
    }

    public function getCommentText(){
        return $this->commentText;
    }
    public function setCommentText($commentText){
        $this->commentText = $commentText;
    }

    public function getUsernameById($id){
        $conn = $this->connection;
        $sql = "SELECT username FROM users WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $commentor = $statement->fetch();
        if($commentor){
            return $commentor['username'];
        }
        else{
        return null;
        }
    }

    public function __toString(){
        $username = $this->getUsernameById($this->userID);
        return $username."<br>".$this->commentText;
    }
}
?>