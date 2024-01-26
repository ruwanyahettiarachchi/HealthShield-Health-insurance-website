<?php
include 'connect.php';

if (isset($_GET['delete'])) {
    $nic = $_GET['delete'];

    $deletesql = "DELETE FROM payment WHERE `NIC/Passport` = '$nic'";
    $result = mysqli_query($conn, $deletesql);

    if ($result) {
        header('location: display1.php');
    } else {
        die(mysqli_error($conn));
    }
}

mysqli_close($conn);
?>
