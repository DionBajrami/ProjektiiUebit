<?php
include_once 'DatabaseConnection.php';

class contactmessages_functions{
  private $connection;

  public function __construct(){
    $conn = new DatabaseConnection;
    $this->connection = $conn->startConnection();
  }



  public function saveMessage($message) {
    $conn = $this->connection;

    $userId = $message->getUserId();
    $senderUsername = $message->getSenderUsername();
    $senderEmail = $message->getSenderEmail();
    $subject = $message->getSubject();
    $messageText = $message->getMessageText();
    $isRead = $message->getIsRead();

    $sql = "INSERT INTO contactmessages (userID, senderUsername, senderEmail, subject, message_text, is_read) VALUES (?, ?, ?, ?, ?, ?)";

    try {
        $statement = $conn->prepare($sql);
        $statement->execute([$userId, $senderUsername, $senderEmail, $subject, $messageText, $isRead]);
        echo "<script>alert('Message successfully saved!')</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "')</script>";
     }
}

public function getMessagesForAdmin() {
    $conn = $this->connection;

    $sql = "SELECT contactmessages.*, users.username 
            FROM contactmessages 
            JOIN users ON contactmessages.userID = users.id";

    try {
        $statement = $conn->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "')</script>";
        error_log("Error in getMessagesForAdmin: " . $e->getMessage(), 0);
        return [];
    }
}

public function getMessageByUserID($userID) {
  $conn = $this->connection;

  $sql = "SELECT * FROM contactmessages WHERE userID = ?";

  try {
      $statement = $conn->prepare($sql);
      $statement->execute([$userID]);

      return $statement->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
      echo "<script>alert('Error: " . $e->getMessage() . "')</script>";
      error_log("Error in getMessageByUserID: " . $e->getMessage(), 0);
      return [];
  }
}


public function getUserDetailsById($userId) {
  $conn = $this->connection;

  $sql = "SELECT id, username, email FROM users WHERE id = ?";

  try {
      $statement = $conn->prepare($sql);
      $statement->execute([$userId]);

      echo '<pre>';
      print_r($userDetails);
      echo '</pre>';

      return $statement->fetch(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
      error_log("Error in getUserDetailsById: " . $e->getMessage(), 0);
      return false;
  }
}


  }
    ?>