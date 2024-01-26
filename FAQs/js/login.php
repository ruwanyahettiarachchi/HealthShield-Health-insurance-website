<?php
include_once "config.php";

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = md5($_POST['password']);

$select = " SELECT * FROM user_db WHERE name = '$username' && password  = '$password' ";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    header('location:contactus.html');
}else{
    header('location:login.html');
}

?>