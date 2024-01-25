<?php
include_once 'user_functions.php';
$id = $_GET['id'];

$uf = new user_functions();
$uf->deleteUser($id);

header("location:useri.php");
?>