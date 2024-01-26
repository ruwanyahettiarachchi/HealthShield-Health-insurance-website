<?php 
    include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display details</title>
    <link rel="stylesheet" href="dstyle.css">
    <header>
        <div class="logo">
            
          <img src="logo.jpg" width="150px" height="160px;" alt="">  

      </div>
        <Nav class="navigation">
            <a href="../home/home.html">Home</a>
        </Nav>  
    </header>
     
   
</head>
<body>
    <div class="title"><h1><center><br>Display Details</center></h1></div>
    <div class="container">
        <div class=block2>
    <button class="primary"><a href="user.php"class="text-light">Add user</a></button>
    </div>
    <table class="table">
        <thead>
            
            <tr>
                <th scope="col">NIC     </th>
                <th scope="col">Name     </th>
                <th scope="col">Email    </th>
                <th scope="col">Mobile    </th>
                <th scope="col">Message   </th>
                <th scope="col">Operation </th>
            </tr>
            
        </thead>
        <tbody>
            <?php
    $sql="SELECT * FROM contact_us";
    $result = mysqli_query($conn, $sql);
    if($result){
        while($row=mysqli_fetch_assoc($result))
        {
            $NIC=$row['NIC'];
            $name=$row['Name'];
            $email=$row['Email'];
            $Mobile=$row['Mobile'];
            $message=$row['Message'];
            echo '<tr>
            <th scope="row">'.$NIC.'</th>
            <td>'  .$name.'  </td>
            <td>'  .$email.' </td>
            <td>'  .$Mobile.'</td>
            <td>'  .$message.'</td>
            <td>
            <div class="button">
                <button class="b1"><a href="update.php?updateNIC='.$NIC.'">Update</a></button>
                <button class="b2"><a href="delete.php?deleteNIC='.$NIC.'">Delete</a></button></td>
                </div>
            </tr>';
            
        }
    }

             ?>
        </tbody>
    </table>
    </div>
    <br><br>
</body>
</html>
