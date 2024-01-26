<?php
require_once 'signup_db.php';

if (isset($_POST["delete"])) {
    $userId = $_POST["user_id"];

    $sql = "DELETE FROM signup WHERE User_ID = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $userId); // Use "s" for string parameters, "i" for integer parameters

        if (mysqli_stmt_execute($stmt)) {
            echo "User deleted successfully.";
        } else {
            echo "Failed to delete user.";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to execute the SQL query.";
    }
}

mysqli_close($conn);
?>
