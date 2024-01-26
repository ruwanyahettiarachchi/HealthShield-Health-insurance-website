<?php
//include 'signup_db.php';
require_once 'signup_db.php';
if(isset($_POST["submit"]))
{
    $fname=$_POST["f_name"] ;
    $lname=$_POST["l_name"] ;
    $uname=$_POST["u_name"] ;
    $mail=$_POST["email"] ;
    $psw=$_POST["psw"] ;
    $rptpsw=$_POST["psw-repeat"] ;


    $sql = "INSERT INTO signup (First_Name, Last_Name, User_Name, Email, Password, Repeat_Password) values(?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../signup.php?error=stmtfail");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssss", $fname, $lname, $uname, $mail, $psw, $rptpsw);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../signup.php?error=none");
    exit();

    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "successful";
    }
    else{
        echo "Failed";
    }

}
