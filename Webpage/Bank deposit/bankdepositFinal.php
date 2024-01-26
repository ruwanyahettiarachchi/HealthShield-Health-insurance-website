<?php
    include 'connect.php';
    if(isset($_POST ['Confirm'])){

      $Bank=$_POST['Bank'];
      $branch=$_POST['branch'];
      $files=$_POST['files'];

   $sql="INSERT INTO bank_deposit_details VALUES('$Bank','$branch','$files')";
   $result = mysqli_query($conn,$sql);

   if($result){
      echo "Record added";
     }
     else{
      echo "Failed";
     }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="details.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Deposit</title>
</head>
<body>
    <header>
        <h2 class="logo"><img src="logo.jpeg" height="120px" width="130px"></h2>
            <Nav class="navigation">
                <<a href="../../home/home.html">Home</a>
                <a href="../../contact us/user.php">Contact us</a>
                <a href="../../About Us/AboutUs.html">About us</a>
                <a href="../../FAQs/FAQ.html">FAQs</a>
                <a href="../../Gold/Gold.html">Our Packages</a>
                <a href="../../Signuplasal/login.html">Login</a>
                <a href="../../Signuplasal/signup.php">Sign up</a>
            </Nav>
    </header>

    <div id="border">
        
     <div id="p_details">
        <h1><u>Payment Details</u></h1>
     </div>

<form method="post" action="">
   <div id="frm">
      <lable>Bank</lable>
      <select class="bank-select" name="Bank">
                  <option>Select Bank</option>    
                  <option >Bank of Ceylon</option>
                  <option >Commercial bank</option>
                  <option >Sampath bank</option>
                  <option >Peoples bank</option>
      </select><br><br>
         <lable>Branch</lable>
   <input type="text" name="branch" size="30"><br><br><br>

   <h3>             Upload your bank slip here </h3><br><br>

   <label id="label" for="file">
      <img src="upload.png" height="200px" width="400px">
   </label>
   <input id="file" type="file" name="files"
   onchange="loadFile(event)"/>

   </div>
   <div id="confirm-btn">
<input type="Submit" name="Confirm" value="Confirm">
</div>
<br><br>
</form>

</div>


<div id="logo">
    <img src="logo.jpeg" height="120px" width="130px">
      </div>

      
      <footer>

<div class="waves">
       <div class="wave" id="wave1"></div>
       <div class="wave" id="wave2"></div>
       <div class="wave" id="wave3"></div>
       <div class="wave" id="wave4"></div>
</div>


<ul class="social_icon">
<li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
<li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
<li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
<li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>  </ul>

<ul class="menu">
<li><a href="#">About us</a></li>
      <li><a href="../contact us/user.php">Contact us</a></li>
      <li><a href="../Terms and conditions/Terms and condition.html">Terms & conditions</a></li>
      <li><a href="../Privacy and policies/privacy and policy.html">Privacy & policy</a></li>
        </ul>

<p>©2023 Health care Insurance| All Right Reserved</p>
</footer>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>