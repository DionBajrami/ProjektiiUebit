<?php
include "DatabaseConnection.php";
include_once "user_functions.php";
include_once "users.php";

$uf = new user_functions();
$users = $uf->getAllUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<header>
    <?php
    include "navbar.php";
    ?>
</header>
<body>
    <div class="UsersContainer" style="margin:10px">
        <table border = 1>
            <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Privilege</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user){ ?>
                    <tr>
                        <td><?php echo $user['username'];?></td>
                        <td><?php echo $user['email'];?></td>
                        <td><?php echo $user['role'];?></td>
                        <td><a href='edit.php?id=<?php echo $user['id']?>'><img src="edit_FILL0_wght400_GRAD0_opsz24.png" style="background-color:lime;border-radius:5px;width:20px"></a></img></td>
                        <td><a href='delete.php?id=<?php echo $user['id']?>'><img src="delete_FILL0_wght400_GRAD0_opsz24.png" style="background-color:red;border-radius:5px;width:20px"></a></img></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>