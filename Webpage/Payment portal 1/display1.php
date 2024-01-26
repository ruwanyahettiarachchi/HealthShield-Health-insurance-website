<?php 
    include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="display.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display details</title> 
</head>
<body>
    <div class="container">
    <button class="primary"><a href="paymentfinal.php"class="text-light">Make payment</a></button>
    <center>
    <div class="title"><h1><br>Payment Details</h1></div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">PolicyNumber</th>
                <th scope="col">NIC</th>
                <th scope="col">Email</th>
                <th scope="col">Premium</th>
                <th scope="col">PaymentMethod</th>
                <th scope="col">Operation </th>
            </tr>
        </thead>
        <tbody>
            <?php
    $sql="SELECT * FROM payment";
    $result = mysqli_query($conn, $sql);
    if($result){
        while($row=mysqli_fetch_assoc($result))
        {
            $name=$row['Full_Name'];
            $pNum=$row['Policy_number'];
            $nic=$row['NIC/Passport'];
            $email=$row['Email'];
            $premium=$row['Premium'];
            $favMethod=$row['Pay_method'];
            echo '<tr><center>
            <td scope="row">'.$name.'</td>
            <td>'.$pNum.'</td>
            <td>'.$nic.'</td>
            <td>'.$email.'</td>
            <td>'.$premium.'</td>
            <td>'.$favMethod.'</td>
            <td><button class="b2" name="delete"><a href="delete.php?delete=' .$nic .'">Delete</a></button>
            </td>
            </center></tr>';
            
        }
    }



             ?>
        </tbody>
    </table>

    </center>

    </div>
    
</body>
</html>