<?php
 include'connect.php';
 if(isset($_GET['deleteNIC']))
 {
    $NIC=$_GET['deleteNIC'];

    $deletesql="Delete from contact_us where NIC='$NIC'";
    $result=mysqli_query($conn,$deletesql);
    if($result)
    {
        header('location:display.php');
    }else
    {
        die(mysqli_error($conn));
    }
 }
 ?>