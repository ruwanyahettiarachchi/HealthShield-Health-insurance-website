<?php

require_once 'signup_db.php';
if(isset($_POST['submit'])){
    $uname = mysqli_real_escape_string($conn, $_POST['u_name']);
    $psw = md5($_POST['psw']);

    $select = "SELECT * FROM signup WHERE User_Name = '.$uname.' AND Password  = '.$psw.'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        header('location:login.php');
    }else{
        header('location:../login.html');
    }
}
?>