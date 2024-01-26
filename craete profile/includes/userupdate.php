<?php
include 'dbh.php';

if (isset($_GET['updateuser_Id'])) {
    $user_Id = $_GET['updateuser_Id'];

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the updated values from the form
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $TypeOfPlan = $_POST['TypeOfPlan'];
        $AddressLine01 = $_POST['AddressLine01'];
        $AddressLine02 = $_POST['AddressLine02'];
        $DateOfBirth = $_POST['DateOfBirth'];
        $Gender = $_POST['Gender'];
        $contactNumber = $_POST['contactNumber'];
        $Email = $_POST['Email'];
        $UpdateMedical = $_POST['UpdateMedical'];
        $Paymethod = $_POST['Paymethod'];
        $Paymentfrequency = $_POST['Paymentfrequency'];

        // Update the user's information in the database
        $sql = "UPDATE `register` SET FirstName='$FirstName', LastName='$LastName', TypeOfPlan='$TypeOfPlan', AddressLine01='$AddressLine01', AddressLine02='$AddressLine02', DateOfBirth='$DateOfBirth', Gender='$Gender', contactNumber='$contactNumber', Email='$Email', UpdateMedical='$UpdateMedical', Paymethod='$Paymethod', Paymentfrequency='$Paymentfrequency' WHERE user_Id='$user_Id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "User information updated successfully.";
        } else {
            echo "Error updating user information: " . mysqli_error($conn);
        }
    }

    // Retrieve the user's current information from the database
    $sql = "SELECT * FROM `register` WHERE user_Id='$user_Id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
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
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Update User</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>

        <body>

            <div class="container">
                <h1>Update User Information</h1>
                <form method="POST">
                    <div class="mb-3">
                        <label for="FirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?php echo $FirstName; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="LastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="LastName" name="LastName" value="<?php echo $LastName; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="TypeOfPlan" class="form-label">Type of Plan</label>
                        <input type="text" class="form-control" id="TypeOfPlan" name="TypeOfPlan" value="<?php echo $TypeOfPlan; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="AddressLine01" class="form-label">Address Line 01</label>
                        <input type="text" class="form-control" id="AddressLine01" name="AddressLine01" value="<?php echo $AddressLine01; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="AddressLine02" class="form-label">Address Line 02</label>
                        <input type="text" class="form-control" id="AddressLine02" name="AddressLine02" value="<?php echo $AddressLine02; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="DateOfBirth" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth" value="<?php echo $DateOfBirth; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Gender" class="form-label">Gender</label>
                        <select class="form-select" id="Gender" name="Gender" required>
                            <option value="Male" <?php if ($Gender === "Male") echo "selected"; ?>>Male</option>
                            <option value="Female" <?php if ($Gender === "Female") echo "selected"; ?>>Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contactNumber" name="contactNumber" value="<?php echo $contactNumber; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $Email; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="UpdateMedical" class="form-label">Update Medical</label>
                        <textarea class="form-control" id="UpdateMedical" name="UpdateMedical" rows="3" required><?php echo $UpdateMedical; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Paymethod" class="form-label">Payment Method</label>
                        <input type="text" class="form-control" id="Paymethod" name="Paymethod" value="<?php echo $Paymethod; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Paymentfrequency" class="form-label">Payment Frequency</label>
                        <input type="text" class="form-control" id="Paymentfrequency" name="Paymentfrequency" value="<?php echo $Paymentfrequency; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update User</button>
                </form>
            </div>

        </body>

        </html>

<?php
    } else {
        echo "User not found.";
    }
} else {
    echo "User ID not provided.";
}
?>
