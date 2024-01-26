
<?php
include 'dbh.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>health insurance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light" style="text-decoration:none">Add user</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">profile pic</th>
                    <th scope="col">NIC</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Type of plan</th>
                    <th scope="col">Address Line01</th>
                    <th scope="col">Address Line02</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Medical </th>
                    <th scope="col">Payment method</th>
                    <th scope="col">Payment frequency</th>
                   

                </tr>
            </thead>
            <tbody>
                <?php
    $sql="Select * from `register`";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        //$row=mysqli_fetch_assoc($result);
        //echo $row['name'] ;
        while ($row=mysqli_fetch_assoc($result))
        {
            $profilepic=$row['profilepic'];
            $NIC=$row['NIC'];
            $FirstName=$row['FirstName'];
	        $LastName=$row['LastName'];
            $TypeOfPlan=$row['TypeOfPlan'];
            $AddressLine01=$row['AddressLine01'];
            $AddressLine02=$row['AddressLine02'];
            $DateOfBirth=$row['DateOfBirth'];
            $Gender=$row['Gender'];
            $contactNumber=$row['contactNumber'];
            $Email=$row['Email'];
          
            $UpdateMedical=$row['UpdateMedical'];
            $Paymethod=$row['Paymethod'];
            $Paymentfrequency=$row['Paymentfrequency'];
            
            echo'<tr>
            <th scope="row">'.$profilepic.'</th>
            <td>'.$NIC.'</td>
            <td>'.$FirstName.'</td>
            <td>'.$LastName.'</td>
            <td> '.$TypeOfPlan.'   </td>
            <td> '.$AddressLine01.'   </td>
            <td> '.$AddressLine02.'   </td>
            <td> '.$DateOfBirth.'   </td>
            <td> '.$Gender.'   </td>
            <td> '. $contactNumber        .'   </td>
            <td> '. $Email        .'   </td>
            <td> '. $UpdateMedical        .'   </td>
            <td> '. $Paymethod        .'   </td>
            <td> '. $Paymentfrequency        .'   </td>
           
            

            <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$NIC.'"class="text-light" style="text-decoration:none">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$NIC.'"class="text-light" style="text-decoration:none">Delete</a></button>
    </td>
          </tr>';
        }
          
    } 
    ?>
    


            </tbody>
        </table>
    </div>

</body>

</html>