0<?php
include 'connect.php';
if(isset($_POST ['Next'])){


    $name=$_POST['name'];
    $pNum=$_POST['pNum'];
    $nic=$_POST['nic'];
    $email=$_POST['mail'];
    $premium = $_POST['premium'];
    $favMethod = $_POST['fav_method'];
    
    $sql="INSERT INTO payment VALUES('$name','$pNum','$nic','$email','$premium','$favMethod')";
    $result = mysqli_query($conn,$sql);

    if($result){
     echo "Record added";
    }else{
     echo "Failed";
    }


 }
    
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="stylesheet" href="payment.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Payment Portal</title>
</head>

<body>
   <header>
      <h2 class="logo"><img src="logo.jpeg" height="120px" width="130px"></h2>
          <Nav class="navigation">
              <a href="../../home/home.html">Home</a>
              <a href="../../contact us/user.php">Contact us</a>
              <a href="../../About Us/AboutUs.html">About us</a>
              <a href="../../FAQs/FAQ.html">FAQs</a>
              <a href="../../Signuplasal/login.html">Login</a>
              <a href="../../Signuplasal/signup.php">Sign up</a>
              
          </Nav>
  </header>
  
   <form method="post" action="">
      <h2> <u>Payment Information </u></h2><br><br>

      <label> Full Name : </label>
      <input type="text" id="name" name="name" size="60" height="60"> <br><br><br>

      <label>Policy Number :</label>
      <input type="text" id="pNum" name="pNum"> <br><br><br>

      <label>NIC/Passport :</label>
      <input type="text" id="nic" name ="nic"> <br><br><br>

      <label>Email :</label>
      <input type="email" id="mail" name="mail" size="60"> <br><br><br>

      <label>premium :</label>
      <input type="text" id="premium" name="premium"> <br><br><br>

      <h3>payment method:</h3> <br><br>
      <input type="radio" name="fav_method" value="card"> <label> Card Payment </label><br>
      <input type="radio" name="fav_method" value="bank"><label> Bank Deposit </label>

      <div id="btn">
   <button onclick="validate()" type="submit" name="Next">Next</button>  
</div>


   </form>

   
   <div id="terms">
      <h2> Terms of Service </h2><br>
      <p>Welcome to our payment portal for the Health <br>
         Shield Health  Insurance Management System.<br>
         Before using the payment portal, please read <br> 
         and agree to our Terms and conditions.  By <br>
         accessing or   using the portal, you acknowledge<br>
         that you have read, understood, and <br>
          agree to be bound by these terms</p>
          <a href="../../Terms and conditions/Terms and condition.html">Terms and conditions </a>
   </div>


   <div id="robot">
      <label> <input type="checkbox" name="check">I'm not a robot</label>

   </div>

   <div id="robot-img">
      <img src="recap.png" height="50px" width="50px">

   </div>
   
<div class="bt-bt-2">
<button><a href="userDisplay.php">Display entered details</a></button>
</div>


 </form>

<div id="last-border">

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
            <li><a href="../../Terms and conditions/Terms and condition.html">Terms and Conditions</a></li>
            <li><a href="../../Privacy and policies/privacy and policy.html">Privacy and Policy</a></li>
            <li><a href="../../About Us/AboutUs.html">About us</a></li>
            <li><a href="../../contact us/user.php">Contact us</a></li>
            <li><a href="../../FAQs/FAQ.html">FAQs</a></li>
        </ul>

        <p>©2023 Health care Insurance| All Right Reserved</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <script src="paymentvalidate.js"></script>
</body>


</html>