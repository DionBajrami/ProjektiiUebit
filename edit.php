<?php
include 'user_functions.php';
include 'navbar.php';

$uf = new user_functions();
$id = $_GET['id'];
$user = $uf->getUserById($id);

if (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];


    $uf->editUser($id, $username, $email, $password, $role);

   header('location:useri.php');
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="css" href="style.css">
    <title>Edit Users</title>
</head>
<body>
   
    <div style="display: flex; flex-direction: column">
        <p class="title" style="display: flex; align-items: center; justify-content: center">Edit User</p>
        <div class="EditUser" style="display: flex">
            <p style="border-bottom: 3px solid lime; font-family: 'Press Start 2P', 'sans-serif';"><?php echo "ID:".$user['id'];?></p><br>
            <form id="editForm" action="<?php echo $_SERVER['PHP_SELF']?>?id=<?php echo $user['id']?>" method='post'>
            <input type="text" id="eUsername" name="username"placeholder="Username" value="<?php echo $user['username']?>">
            <div class="invalid" id="invalidEmail">
                    <input type="text" id="eEmail" name="email" placeholder="Email" value="<?php echo $user['email']?>"> <br>
                </div>
                <div class="invalid" id="invalidPassword">
                    <input type="password" id="ePassword" name="password" placeholder="Password" value="<?php echo $user['password']?>"> <br>
                </div>
                <div class="invalid" id="invalidRole">
                    <input type="text" id="eRole" name="role" placeholder="Role(admin or user)" value="<?php echo $user['role']?>"> <br> 
                </div>
                <input type="submit" name="edit" value="Save">
            </form>
        </div>
    </div>
</body>
</html>
