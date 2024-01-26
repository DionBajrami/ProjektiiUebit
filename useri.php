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
        <table class ="useriTable" border = 1>

    <style>
        .useriTable{
            padding: 10px;
            font-size: 14px;
            width: 100%;
            margin:auto;
            margin-top:30px;
            border:none;
         
        }
        .useriTable thead{
            border: 2px solid black;
            font-family: "Press Start 2P", "consolas", sans-serif;
            height:50px;
            background-color:black;
            color: white;
            
        }
        .useriTable tbody{
            border: 2px solid black;
            font-weight:bold;
            background-color:lightgray;
            font-size:18px
        }
        #edit{
            width:30px;
            background-color:lime;
        }
        #delete{
            background-color:red;
            width:30px;
        }
    </style>

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
                        <td id="edit"><a href='edit.php?id=<?php echo $user['id']?>'><img src="edit_FILL0_wght400_GRAD0_opsz24.png" style="background-color:lime;border-radius:5px;width:100%"></a></img></td>
                        <td id="delete"><a href='delete.php?id=<?php echo $user['id']?>'><img src="delete_FILL0_wght400_GRAD0_opsz24.png" style="background-color:red;border-radius:5px;width:100%"></a></img></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>