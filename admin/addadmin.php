<?php
include 'dbh copy.php'; 
if (isset($_POST['login'])) {
    $fname = $_POST['frist_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    $sql = "INSERT INTO `admin` (`admin_fname`,`admin_lname`,`admin_email`,`admin_password`,`admin_repassword`)
    VALUES('$fname', '$lname', '$email', '$password', '$repassword')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Record added";
    } else {
        echo "Failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Admin</title>
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


                <div style="margin-top: 50px; margin-left: 530px;" class="div2">

                    <label class=" admin ">Add New Admin</label> <br><br>
                    <form action="addadmin.php" method="post">
                        <div>
                            <label class="Stext">Frist Name</label> <br>
                            <input type="text " class="Stextin" placeholde="frist name" name="frist_name">
                        </div>
                        <br>

                        <div>
                            <label class="Stext">Last Name</label> <br>
                            <input type="text " class="Stextin" placeholde="last name" name="last_name">
                        </div>
                        <br>

                        <div>
                            <label class="Stext">Email</label> <br>
                            <input type="text " class="Stextin" placeholde="abc@gmail.com" name="email">
                        </div>
                        <br>

                        <div>
                            <label class="Stext">Password</label> <br>
                            <input type="password " class="Stextin" placeholde="xxxxxxxxxx" name="password">
                        </div>
                        <br>

                        <div>
                            <label class="Stext">Re enter Password</label> <br>
                            <input type="password " class="Stextin" placeholde="xxxxxxxxxx" name="repassword">
                        </div>
                        <br>

                        <div>
                            <input type="checkbox" style="margin-left: 90px;"><label for="">Remember me</label>
                        </div>
                        <br>
                        <div>
                            <Button class="Sbutton" name="login">Add Admin</Button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</body>

</html>