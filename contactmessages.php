<?php
class contactmessages {
    private $id;
    private $userId;
    private $senderUsername;
    private $senderEmail;
    private $subject;
    private $messageText;
    private $sentAt;
    private $isRead;

    
    public function __construct($userId, $senderUsername, $senderEmail, $subject, $messageText) {
        $this->userId = $userId;
        $this->senderUsername = $senderUsername;
        $this->senderEmail = $senderEmail;
        $this->subject = $subject;
        $this->messageText = $messageText;
        $this->sentAt = date('Y-m-d H:i:s');
        $this->isRead = false;
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getSenderUsername() {
        return $this->senderUsername;
    }

    public function getSenderEmail() {
        return $this->senderEmail;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getMessageText() {
        return $this->messageText;
    }

    public function getSentAt() {
        return $this->sentAt;
    }

    public function getIsRead() {
        return $this->isRead;
    }
}

?>
