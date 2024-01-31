<?php
include_once('DatabaseConnection.php');

    class user_functions{
        private $connection;

        public function __construct(){
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function insertUser($user){
            $conn = $this->connection;
            
            $username = $user->getUsername();
            $email = $user->getEmail();
            $password = $user->getPassword();
            $role = $user->getRole();
            
            $sql = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
            
            try {
                $statement = $conn->prepare($sql);
                $statement->execute([$username, $email, $password, $role]);
                echo "<script>alert('Successfully added!')</script>";
            } catch (PDOException $e) {
                echo "<script>alert('Error: " . $e->getMessage() . "')</script>";
                error_log("Error in insertUser: " . $e->getMessage(), 0);
            }
        }
        
    

    public function getAllUsers(){
        $conn = $this->connection;
        
        $sql = "SELECT * FROM users";
        $statement = $conn->query($sql);
        
        $users = $statement->fetchAll();
        return $users;
    }

    public function editUser($id, $username, $email, $password, $role){
        $conn = $this->connection;
        $sql = "UPDATE users SET username=?, email=?, password=?, role=? WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$username, $email, $password, $role, $id]);
        echo "<script>console.log('Changes made')</script>";
        
    }

    function deleteUser($id){
        $conn = $this->connection;
        $sql = "DELETE FROM users WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    }

    function getUserById($id){
        $conn = $this->connection;
        $sql="SELECT * FROM users WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $user=$statement->fetch();

        return $user;
    }

    function getUserByEmailAndPassword($email,$password){
        $conn = $this->connection;
        $sql="SELECT * FROM users WHERE email=? AND password=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$email,$password]);
        $user=$statement->fetch();

       return $user;
    }

    function exists($email, $username){
        $conn = $this->connection;
        $sql ="SELECT * FROM users WHERE email=? AND username=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$email, $username]);
        $user=$statement->fetch();

        return $user;
    }
        
}

?>