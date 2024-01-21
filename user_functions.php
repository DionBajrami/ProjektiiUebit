<?php
include 'config.php';

    function registerusers($username,$email,$password,$role = 'user'){

    global $db;

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$hashedPassword,$role);

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
    }

    function getAllUsers(){
        global $db;

        $query = "SELECT * FROM users";
        $result = mysqli_query($db,$query);

        $users = array();
        while($row = mysqli_fetch_assoc($result)){
            $users[] = $row;
        }
        return $users;
    }
?>