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
    <?php include "navbar.php";?>
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
            <form action="<?php echo $_SERVER['PHP_SELF']?>?id=<?php echo $user['id']?>" method='post'>
                <input type="text" id="eUsername" name="username" value="<?php echo $user['username']?>"> <br>
                <div class="invalid" id="invalidEmail">
                <input type="text" id="eEmail" name="email" value="<?php echo $user['email']?>"> <br>
                </div>
                <div class="invalid" id="invalidPassword">
                <input type="text" id="ePassword" name="password" value="<?php echo $user['password']?>"> <br>
                </div>
                <div class="invalid" id="invalidRole">
                <input type="text" id="eRole" name="role" value="<?php echo $user['role']?>"> <br> 
                </div>
                <input type="submit" onclick="validateEdit()" name="edit" value="Save">
            </form>
        </div>
    </div>
    <script>
        
            let emailRegex = /^[a-zA-Z0-9_]+@+[a-z]+\.+[a-z]{2,4}$/;
            let passwordRegex = /^[a-zA-Z0-9]{8,30}$/;
            let roleRegex = /^(admin|user)$/;


            let email = document.getElementById('eEmail');
            let password = document.getElementById('ePassword');
            let role = document.getElementById('eRole');

            let invalidEmail = document.getElementById('invalidEmail');
            let invalidPassword = document.getElementById('invalidPassword');
            let invalidRole = document.getElementById('invalidRole');

            function validateEdit(){
                invalidEmail.innerText='';
                invalidPassword.innerText='';
                invalidRole.innerText='';

                if(!emailRegex.test(email.value)){
                    invalidEmail.innerText = 'Invalid Email';
                }else{
                    invalidEmail.innerText = '';
                }

                if(!passwordRegex.test(password.value)){
                    invalidPassword.innerText = 'Invalid Password';
                }else{
                    invalidPassword.innerText = '';
                }

                if(!roleRegex.test(role.value)){
                    invalidRole.innerText = 'Role must be "admin" or "user"';
                }else{
                    invalidRole.innerText = '';
                }

            }


        
    </script>
</body>
</html>

<?php
if(isset($_POST['edit'])){
    $id = $user['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $uf->editUser($id, $username, $email, $password, $role);
    header('location:useri.php');
}
?>