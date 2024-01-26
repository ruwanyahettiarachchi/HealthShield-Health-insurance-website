<?php
include 'dbh copy.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display details</title>
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
                <div style="margin-top: 50px; margin-left: 250px;" class="div3">
                    <table class="table1">
                        <thead class="table">
                            <tr class="table">
                                <th class="table" scope="col">First Name</th>
                                <th class="table" scope="col">Last Name</th>
                                <th class="table" scope="col">Email</th>
                                <th class="table" scope="col">Password</th>
                                <th class="table" scope="col">RePassword</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM admin;";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $fname = $row['admin_fname'];
                                    $lname = $row['admin_lname'];
                                    $email = $row['admin_email'];
                                    $password = $row['admin_password'];
                                    $repassword = $row['admin_repassword'];
                                    echo '<tr>
            
                                <td>' . $fname . '</td>
                                <td>' . $lname . '</td>
                                <td>' . $email . '</td>
                                <td>' . $password . '</td>
                                <td>' . $repassword . '</td>
                               
                               
                                </tr>';
                                }
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>
</body>

</html>