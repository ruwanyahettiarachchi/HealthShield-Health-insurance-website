<!DOCTYPE html>
<html>
<head>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
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
        
        .user-profile-buttons {
            text-align: center;
        }
        
        .user-profile-buttons button {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            margin-right: 10px;
        }
        
        .user-profile-buttons button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="user-profile">
        <?php
        require_once 'signup_db.php';

        $sql = "SELECT * FROM signup"; // Retrieve all users from the signup table
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<h2>User Profiles</h2>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="user-profile-info">';
                echo '<label>First Name:</label> ' . $row['First_Name'] . '<br>';
                echo '<label>Last Name:</label> ' . $row['Last_Name'] . '<br>';
                echo '<label>User Name:</label> ' . $row['User_Name'] . '<br>';
                echo '<label>Email:</label> ' . $row['Email'] . '<br>';
                echo '<label>Password:</label> ' . $row['Password'] . '<br>';
                echo '<label>Repeat Password:</label> ' . $row['Repeat_Password'] . '<br>';
                echo '</div>';

                // Add the delete and update buttons for each user
                echo '<div class="user-profile-buttons">';
                echo '<form method="POST" action="delete.php">';
                echo '<input type="hidden" name="user_id" value="' . $row['User_ID'] . '">';
                echo '<button type="submit" name="delete">Delete</button>';
                echo '</form>';
                echo '<form method="POST" action="update.php">';
                echo '<input type="hidden" name="user_id" value="' . $row['User_ID'] . '">';
                echo '<button type="submit" name="update">Update</button>';
                echo '</form>';
                echo '</div>';
            }
        } else {
            echo '<h2>No users found in the database.</h2>';
        }

        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
