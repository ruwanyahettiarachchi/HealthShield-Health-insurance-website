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
        
        .update-form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
            display: none;
        }
        
        .update-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .update-form label {
            font-weight: bold;
        }
        
        .update-form input[type="text"],
        .update-form input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .update-form button {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
        }
        
        .update-form button:hover {
            opacity: 0.8;
        }
    </style>
    <script>
        function toggleForm() {
            var profileSection = document.getElementById("user-profile");
            var updateForm = document.getElementById("update-form");

            profileSection.style.display = "none";
            updateForm.style.display = "block";
        }
    </script>
</head>
<body>
    <div class="user-profile" id="user-profile">
        <?php
        require_once 'signup_db.php';

        if (isset($_POST["update"])) {
            $userId = $_POST["user_id"];
            $fname = $_POST["f_name"];
            $lname = $_POST["l_name"];
            $uname = $_POST["u_name"];
            $mail = $_POST["email"];

            $sql = "UPDATE signup SET First_Name = ?, Last_Name = ?, User_Name = ?, Email = ? WHERE User_ID = ?;";
            $stmt = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $uname, $mail, $userId); // Use "s" for string parameters, "i" for integer parameters

                if (mysqli_stmt_execute($stmt)) {
                    echo "User information updated successfully.";
                } else {
                    echo "Failed to update user information.";
                }

                mysqli_stmt_close($stmt);
            } else {
                echo "Failed to prepare the SQL statement.";
            }
        }

        // Assuming you have a variable called $userId or $username that holds the specific user's ID or username
        $userId = 1; // Replace 1 with the desired user ID or username

        $sql = "SELECT * FROM signup WHERE User_ID = ?;"; // Replace User_ID with the appropriate column name
        $stmt = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $userId); // Use "s" for string parameters, "i" for integer parameters
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                echo '<h2>User Profile</h2>';
                echo '<div class="user-profile-info">';
                echo '<label>First Name:</label> ' . $row['First_Name'] . '<br>';
                echo '<label>Last Name:</label> ' . $row['Last_Name'] . '<br>';
                echo '<label>User Name:</label> ' . $row['User_Name'] . '<br>';
                echo '<label>Email:</label> ' . $row['Email'] . '<br>';
                echo '</div>';

                // Add the update button
                echo '<div class="user-profile-buttons">';
                echo '<button onclick="toggleForm()">Update</button>';
                echo '</div>';
            } else {
                echo '<h2>No user found with the provided ID or username.</h2>';
            }

            mysqli_stmt_close($stmt);
        } else {
            echo '<h2>Failed to execute the SQL query.</h2>';
        }

        mysqli_close($conn);
        ?>
    </div>

    <div class="update-form" id="update-form">
        <h2>Update User Details</h2>
        <form method="POST" action="update.php">
            <?php
            // Assuming you have a variable called $userId or $username that holds the specific user's ID or username
            $userId = 1; // Replace 1 with the desired user ID or username

            $sql = "SELECT * FROM signup WHERE User_ID = ?;"; // Replace User_ID with the appropriate column name
            $stmt = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $userId); // Use "s" for string parameters, "i" for integer parameters
                mysqli_stmt_execute($stmt);

                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);

                    echo '<input type="hidden" name="user_id" value="' . $row['User_ID'] . '">';
                    echo '<label>First Name:</label>';
                    echo '<input type="text" name="f_name" value="' . $row['First_Name'] . '"><br>';
                    echo '<label>Last Name:</label>';
                    echo '<input type="text" name="l_name" value="' . $row['Last_Name'] . '"><br>';
                    echo '<label>User Name:</label>';
                    echo '<input type="text" name="u_name" value="' . $row['User_Name'] . '"><br>';
                    echo '<label>Email:</label>';
                    echo '<input type="email" name="email" value="' . $row['Email'] . '"><br>';
                    echo '<button type="submit" name="update">Update</button>';
                } else {
                    echo '<h2>No user found with the provided ID or username.</h2>';
                }

                mysqli_stmt_close($stmt);
            } else {
                echo '<h2>Failed to execute the SQL query.</h2>';
            }
            ?>
        </form>
    </div>
</body>
</html>
