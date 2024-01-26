<?php
include 'dbh.php';

if(isset($_GET['deleteuser_Id'])){

    $user_Id = $_GET['deleteuser_Id'];

    $sql= "DELETE FROM `register` WHERE user_Id=$user_Id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Deleted successfull";
        header('location:userdisplay.php');

    }else{
        die(mysqli_error($conn));
    }
}
?>