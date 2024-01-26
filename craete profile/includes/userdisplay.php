<?php
include 'dbh.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Insurance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-card {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .profile-card img {
            max-width: 100%;
            border-radius: 5px;
        }

        .profile-card h4 {
            margin-top: 10px;
        }

        .profile-card p {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    <div class="container">
        
        <?php
        $sql = "SELECT * FROM `register`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row =mysqli_fetch_assoc($result)) {
                $user_Id = $row['user_Id'];
                $profilepic = $row['profilepic'];
                $NIC = $row['NIC'];
                $FirstName = $row['FirstName'];
                $LastName = $row['LastName'];
                $TypeOfPlan = $row['TypeOfPlan'];
                $AddressLine01 = $row['AddressLine01'];
                $AddressLine02 = $row['AddressLine02'];
                $DateOfBirth = $row['DateOfBirth'];
                $Gender = $row['Gender'];
                $contactNumber = $row['contactNumber'];
                $Email = $row['Email'];
                $UpdateMedical = $row['UpdateMedical'];
                $Paymethod = $row['Paymethod'];
                $Paymentfrequency = $row['Paymentfrequency'];

                echo '<div class="profile-card">
                        <img src="' . $profilepic . '" alt="Profile Pic">
                        <h4>' . $FirstName . ' ' . $LastName . '</h4>
                        <p><strong>NIC:</strong> ' . $NIC . '</p>
                        <p><strong>Type of Plan:</strong> ' . $TypeOfPlan . '</p>
                        <p><strong>Address:</strong> ' . $AddressLine01 . ', ' . $AddressLine02 . '</p>
                        <p><strong>Date of Birth:</strong> ' . $DateOfBirth . '</p>
                        <p><strong>Gender:</strong> ' . $Gender . '</p>
                        <p><strong>Contact Number:</strong> ' . $contactNumber . '</p>
                        <p><strong>Email:</strong> ' . $Email . '</p>
                        <p><strong>Medical Update:</strong> ' . $UpdateMedical . '</p>
                        <p><strong>Payment Method:</strong> ' . $Paymethod . '</p>
                        <p><strong>Payment Frequency:</strong> ' . $Paymentfrequency . '</p>
                        <div>
                            <button class="btn btn-primary"><a href="userupdate.php?updateuser_Id=' . $user_Id . '" class="text-light" style="text-decoration:none">Update</a></button>
                            <button class="btn btn-danger"><a href="userdelete.php?deleteuser_Id=' . $user_Id . '" class="text-light" style="text-decoration:none">Delete</a></button>
                        </div>
                    </div>';
            }
        }
        ?>
    </div>

</body>

</html>
