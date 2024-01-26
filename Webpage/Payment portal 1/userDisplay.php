<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url('backgroundNew.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        
        h1 {
            text-align: center;
        }
        
        .user-profile {
            max-width: 500px;
            margin: 0 auto;
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
        }
         
        .user-profile h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .user-profile label {
            font-weight: bold;
        }
        
        .user-profile-info {
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <div class="user-profile">
    
    <?php
    require_once 'connect.php';

    $sql = "SELECT * FROM payment"; // Retrieve only one user from the payment table
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<h2>Payment Details</h2>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="user-profile-info">';
                echo '<label>Name:</label> ' . $row['Full_Name'] . '<br>';
                echo '<label>Policy Number:</label> ' . $row['Policy_number'] . '<br>';
                echo '<label>NIC:</label> ' . $row['NIC/Passport'] . '<br>';
                echo '<label>Email:</label> ' . $row['Email'] . '<br>';
                echo '<label>Premium:</label> ' . $row['Premium'] . '<br>';
                echo '<label>Payment Method:</label> ' . $row['Pay_method'] . '<br>';
                echo '</div>';
            }
        }
            else {
                echo '<h2>No users found in the database.</h2>';
            }

            mysqli_close($conn);
        ?>
    </div>
    
</body>
</html>