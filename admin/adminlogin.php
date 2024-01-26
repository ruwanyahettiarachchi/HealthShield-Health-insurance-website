<?php
include 'dbh copy.php'; 



if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $select = "SELECT * FROM `admin` WHERE `admin_email` = '.$email.' AND `admin_password`  = '.$password.'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        header('location:adminlogin.php');
    } else {
        header('location:adminpage.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin SignIn</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>

<body style="margin: 0px; ">
    <div class="image">
        <div class="image1">
            <div style="margin-top: 10px;">

                <div>
                    <img style="width: 100px; height: 100px; margin-left: 50px; margin-top: 20px;" src="logo.jpg">
                    <label class="text" style=" margin-left: 250px;">Health Sheild Health Insurance</label>
                </div>
                <hr>


                <div style="margin-top: 150px; margin-left: 600px;" class="div2">

                    <label class=" admin ">Admin Login</label> <br><br>
                    <form action="adminlogin.php" method="post">
                        <div>
                            <label class="Stext">Username</label> <br>
                            <input type="text " class="Stextin" placeholde="abc@gmail.com" name="email">
                        </div>
                        <br>

                        <div>
                            <label class="Stext">Password</label> <br>
                            <input type="password " class="Stextin" placeholde="xxxxxxxxxx" name="password">
                        </div>
                        <br>
                        <div>
                            <input type="checkbox" style="margin-left: 90px;"><label for="">Remember me</label>
                        </div>
                        <br>
                        <div>
                            <Button class="Sbutton" name="login" onclick="m();">Login</Button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>