<?php
include 'user_functions.php';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$uf = new user_functions();
$user = $uf->getUserById($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users</title>
</head>
<header>
    <?php
    include "navbar.php";
    ?>
</header>
<body>
    <style>
        .EditUser{
            border: 2px solid black;
            width:500px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items:center;
            margin: auto; 
        }
        .EditUser input{
            width:500px;
            border: none;
            border-bottom:2px solid gray ;
            margin-bottom: 10px;
            padding: 8px;
            box-sizing: border-box;
            font-size: 16px;
            outline: none; 
        }
        .EditUser input[type=submit]{
            width:100%;
            margin-bottom:0px;
        }
        .EditUser input[type=submit]:hover{
            background-color:gray;
        }

    </style>
    <div style="display:flex; flex-direction:column">
        <p class="title" style="display:flex;align-items:center;justify-content:center">Edit User</p>
        <div class="EditUser" style="display:flex">
            <p style="border-bottom:3px solid lime;font-family: 'Press Start 2P', 'sans-serif';"><?php echo $user['id']?></p><br>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method='post'>
                <input type="text" name="username" value="<?php echo $user['username']?>"> <br>
                <input type="text" name="email" value="<?php echo $user['email']?>"> <br>
                <input type="text" name="password" value="<?php echo $user['password']?>"> <br>
                <input type="text" name="role" value="<?php echo $user['role']?>"> <br> 
                <input type="submit" name="edit" value="save">
            </form>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['edit'])){
    $id = $user['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $uf->editUser($username, $email, $password, $role);
    header('location:useri.php');
}
?>
