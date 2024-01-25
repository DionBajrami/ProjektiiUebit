<?php


class DatabaseConnection
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "techzone";
  
    public function startConnection()
    {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $err) {
            echo "Connection failed: " . $err->getMessage();
            exit();
        }
    }
}

//Testimi i lidhjes me databaz
/*
$databaseConnection = new DatabaseConnection();


if ($databaseConnection->startConnection()) {
    echo "Database connection successful!";
} else {
    echo "Database connection failed!";
}
*/

?>